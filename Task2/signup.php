<?php
session_start();
require __DIR__ . '/config/db.php';

try {
    // Get input safely
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Check empty fields
    if (empty($email) || empty($password)) {
        die("All fields are required. <a href='index.html'>Go back</a>");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format. <a href='index.html'>Go back</a>");
    }

    // Password length validation
    if (strlen($password) < 6) {
        die("Password must be at least 6 characters long. <a href='index.html'>Go back</a>");
    }

    // Check if user already exists
    $existingUser = $users->findOne(['email' => $email]);

    if ($existingUser) {
        die("Email already registered. <a href='index.html'>Go back</a>");
    }

    //  Hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert user
    $users->insertOne([
        'email' => $email,
        'password' => $hashedPassword,
        'createdAt' => date('Y-m-d H:i:s')
    ]);

    echo "Signup successful! <a href='index.html'>Go to Login</a>";

} catch (Exception $e) {
   
    echo "Something went wrong. Please try again later.";
  
}
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "LoginDb");
if (!$conn) {
die("Database connection failed");
}
echo "Database login connected successfully";
?>

<?php
$email = $_POST["email"];
$password = $_POST["password"];
echo "{$email} and {$password}";
$sql = "SELECT password FROM login WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $dbPassword = $row['password'];
    if ($password == $dbPassword) {
        echo "<br>Login successful";
    } else {
        echo "<br>Invalid password";
    }

} else {
    echo "<br>Email not found";
}
?>

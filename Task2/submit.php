<?php
$conn = mysqli_connect("localhost", "root", "", "LoginDb");
if (!$conn) {
die("Database connection failed");
}
echo "Database connected successfully";
?>

<?php
$name=$_POST["name"];
$email=$_POST["email"];
$age=$_POST["age"];
$password=$_POST["password"];

echo "<br>name:{$name}<br>
email:{$email}<br>
age:{$age}<br>
password:{$password}";
$sql="insert into login(name,age,email,password) values('$name','$age','$email','$password')";
if (mysqli_query($conn,$sql)){
    echo "registration successful";
}
else{
    echo "registration failed";
}
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "LoginDb");
if (!$conn) {
die("Database connection failed");
}
echo "Database connected successfully";
?>

<?php
$name=strtolower(trim($_POST["name"]));
$email=$_POST["email"];
$age=$_POST["age"];
$password=$_POST["password"];
echo "<br>";
foreach($_POST as $key=>$value){
//    echo "$key=>$value<br>";//for radio inputs if input not given that won't shown
    if(!strlen($value)){
        die("please give input to $key field");
    }
}
if(strlen($name)>=3){
    die("username minimum length should be 3");
}
if(!str_contains($email,"@")) {
    die("email should contain @");
}
if(strlen($password)>8){
        die("password should contain atleast 8 character");

}
$sql="insert into login(name,age,email,password) values('$name','$age','$email','$password')";
// if (mysqli_query($conn,$sql)){
//     echo "registration successful";
// }
// else{
//     echo "registration failed";
// }
?>
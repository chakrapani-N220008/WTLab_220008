<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post">
        <label>username:</label>
        <input type="text" name="username" ><br>
        <label>password:</label>
        <input type="password" name="password" ><br>
        <input type="submit" value="submit">
    </form>

</body>
</html>
<?php
    $username=$_POST["username"];
    $password=$_POST["password"];
    echo "username:$username<br>";
    echo "length of username:".strlen($username)."<br>";
    echo "username word count:".str_word_count($username)."<br>";
    echo "reverse of username:".strrev($username)."<br>";
    echo "ucfirst of username:".ucfirst($username)."<br>";//convert first letter capital
    echo "ucwords of username:".ucwords($username)."<br>";//same as ucfirst  for every word
    echo "position(b) of username:".strpos($username,"b")."<br>";
    echo "str_replace(b,B,username)of username:".str_replace("b","B",$username)."<br>";
    echo "substr(username)of username:".substr($username,3,5)."<br>";
    echo "trim(username)of username:".trim($username)."<br>";
    echo "ltrim(username)of username:".ltrim($username)."<br>";
    echo "rtrim(username)of username:".rtrim($username)."<br>";
    echo "strcmp(username,hi)of username:".strcmp($username,"hi")."<br>";//give difference to  first mismatch of given string
    echo "strcasecmp(username,hi)of username:".strcasecmp($username,"hi")."<br>";//same as strcmp but case insensitive
    echo "htmlspecialchars(username,hi)of username:".htmlspecialchars($username)."<br>";
    echo "addslashes(username):".addslashes($username)."<br>";
?>
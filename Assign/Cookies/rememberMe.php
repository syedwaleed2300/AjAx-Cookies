<?php 
require "conn.php";


if(isset($_POST['submit']))
{
    $username= $_POST["username"];
    $password=$_POST["password"];
    $rememberMe= isset($_POST["remember"]);

$sql="";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num >0){
    if($rememberMe){
    setcookie('username',$username, time() + (86400 * 30), "/");
    setcookie('password',$password, time() + (86400 * 30), "/");


}
echo "login successfully";
header("location: welcome.php");
exit();
}
else{
    echo "Invalid username and password";
}








}
?>





?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="cookie.css">
    <style>
    Style for the login form */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h2 {
    text-align: center;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="checkbox"] {
    margin-bottom: 10px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}</style>
</head>

<body>

    <form method="post">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="remember">Remember me:</label>
        <input type="checkbox" id="remember" name="remember">
        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>



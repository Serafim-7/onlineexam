<?php
session_start();

include "connection.php";
$error = array();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if(!empty($user) && !empty($pass)){
        $query = " select * from examdb where Username = '$user' limit 1";
        $result = mysqli_query($link, $query);
        if($result){

            if($result && mysqli_num_rows($result) > 0){
                $user_info = mysqli_fetch_assoc($result);

                if($user_info["Username"] == $user){
                    array_push($error,"User Already Exists !!");  
                }

                if($user_info["Password"] == $pass){
                    header("location:welcome.php");
                    die();
                }
            }
        }
        echo "<script type='text/javascript'> alert('Incorrect password !!! Please try again.')</script>"; 
    }
    else{
        echo "<script type='text/javascript'> alert('Incorrect password !!! Please try again.')</script>"; 
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/welstyle.css">
</head>
<body>
<div class="header">
<div class="logo">
<img src="img/logo.png" alt="Logo" id="logopic">
</div>
<h1 >ONLINE EXAMINATION SYSTEM</h1>

</div>
<div class="login-box">
    <form  method="POST">
<div class="user">
<p>Username</p>
</div>
<div class="user-box">
<input type="number" name="username"  required placeholder="Enter Your ID Number">
</div>
<div class="user">
<p>Password</p>
</div>
<div class="user-box">
<input type="password" name="password"  required placeholder="Enter Your Password">
</div>
<div class="user">
    <input type="checkbox">Remember password
</div>
<a href="welcome.php">
<span></span>
<span></span>
<span></span>
<span></span>
<input type="submit" name="submit" value="Login">
</a>

<br>
<div class="user">
    <p>If you don't have an account </p>
</div>
<a href="a">
<span></span>
<span></span>
<span></span>
<span></span>
<a href="index.php">Register</a>
</a>
</form>
</div>
</body>
</html>
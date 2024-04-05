<!DOCTYPE html>
<html>
<title>REGISTERATION</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/welstyle.css">
<?php
session_start();

include "connection.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $firstname = $_POST['fname'];
    $lastname = $_POST["lname"];
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if(!empty($user) && !empty($pass)){
        $query = "insert into examdb (Username, Firstname, Lastname, Password) values ('$user','$firstname','$lastname','$pass') ";

        mysqli_query($link, $query);

        echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Enter Valid Username and Password.')</script>";
    }
}

?>

<body>

<div class="header">
<div class="logo">
<img src="img/logo.png" alt="Logo" width="215px" height="150px" id="logopic">
</div>
    <h1 >ONLINE EXAMINATION SYSTEM</h1>
</div>
<div class="login-box">
<h2>REGISTERATION</h2>
<form action="" method="POST">
<div class="user">
<p>First Name</p>
</div>
<div class="user-box">
<input type="text" name="fname"  required placeholder="Enter Your First Name" autocomplete="off"> 
</div>
<div class="user">
<p>Last Name</p>
</div>
<div class="user-box">
<input type="text" name="lname"  required placeholder="Enter Your Last Name" autocomplete="off"> 
</div>
<div class="user">
<p>Username</p>
</div>
<div class="user-box">
<input type="number" name="username"  required placeholder="Enter Your ID Number" autocomplete="off">
</div>
<div class="user">
<p>Password</p>
</div>
<div class="user-box">
<input type="password" name="password"  required placeholder="Enter Your Password" autocomplete="off">
</div>
<a href="welcome.php">
<span></span>
<span></span>
<span></span>
<span></span>
<input type="submit" name="submit" value="Register">
</a>
<div class="loginbtn">
<h4>Already have an account ? 
</h4><a href="login.php">
<input type="button" name="submit" value="Login">
</a>
</div>
</form>
</div>
</body>
</html>

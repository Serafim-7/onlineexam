<?php
session_start();

include ("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/welstyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
<div class="logo">
<img src="img/logo.png" alt="Logo" width="215px" height="150px" id="logopic" >
</div>
<img src="img/user.jpg" alt="User" id="userpic" width="100px"
    height="100px">
<h1 >ONLINE EXAMINATION SYSTEM</h1>
    <nav class="navbar">
        <ul class="nav-menu">
            <li class="nav-item"><a href="welcome.php" class="nav-link" >Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Log out</a></li>
        </ul>
    </nav>

</div>
<div class="welcomebtn">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST["sub"];
    $quizpass='1234';

    if ($subject == "Math") {
        echo "<div style='font-size: 12px;'>";
        echo "You Can start your ".$subject." Questions Now"."<br>";
        echo "1. What is the sum of 3 and 5?<br>";
        echo "<input type='radio' name='question1' value='6'>6<br>";
        echo "<input type='radio' name='question1' value='7'>7<br>";
        echo "<input type='radio' name='question1' value='8'>8<br>";
        echo "<input type='radio' name='question1' value='9'>9<br><br>";
        echo "2. Solve for x: 2x = 10<br>";
        echo "<input type='radio' name='question2' value='3'>3<br>";
        echo "<input type='radio' name='question2' value='4'>4<br>";
        echo "<input type='radio' name='question2' value='5'>5<br>";
        echo "<input type='radio' name='question2' value='6'>6<br><br>";
        echo "3. What is the square root of 16?<br>";
        echo "<input type='radio' name='question3' value='2'>2<br>";
        echo "<input type='radio' name='question3' value='3'>3<br>";
        echo "<input type='radio' name='question3' value='4'>4<br>";
        echo "<input type='radio' name='question3' value='5'>5<br><br>";
        echo "</div>";
        echo "<input type='submit' name='submit' value='Submit' >";
    }
    if($subject == "English"){
        echo "<div style='font-size: 12px;'>";
        echo "You Can start your ".$subject." Questions Now"."<br>";
        echo "1.What is the capital of Ethiopia ?<br>";
        echo "<input type='radio' name='question1' value='Debre Berhan'>Debre Berhan<br>";
        echo "<input type='radio' name='question1' value='Dire Dawa'>Dire Dawa<br>";
        echo "<input type='radio' name='question1' value='Addis Abeba'>Addis Abeba<br>";
        echo "<input type='radio' name='question1' value='Bahir Dar'>Bahir Dar<br><br>";
        echo "2. Who wrote the book 'Fikir Eske Mekabir' ?<br>";
        echo "<input type='radio' name='question2' value='Hadis Alemayehu'>Hadis Alemayehu<br>";
        echo "<input type='radio' name='question2' value='Kebede Mikael'>Kebede Mikael<br>";
        echo "<input type='radio' name='question2' value='Yismak Worku'>Yismak Worku<br>";
        echo "<input type='radio' name='question2' value='Bealu Girma'>Bealu Girma<br><br>";
        echo "</div>";
        echo "<input type='submit' name='submit' value='Submit' >";

    }
    if($subject == "Aptitude"){
        echo "<div style='font-size: 12px;'>";
        echo "You Can start your ".$subject." Questions Now"."<br>";
        echo "1.If a train travels at 60 km/h and it takes 3 hours to reach its destination, how far is the destination?<br>";
        echo "<input type='radio' name='question1' value='120'>120 km<br>";
        echo "<input type='radio' name='question1' value='180'>180 km<br>";
        echo "<input type='radio' name='question1' value='200'>200 km<br>";
        echo "<input type='radio' name='question1' value='220'>220 km<br><br>";
        echo "2.If 5 people can build 5 tables in 5 days, how many days would it take 20 workers to build 20 tables?<br>";
        echo "<input type='radio' name='question2' value='5'>5<br>";
        echo "<input type='radio' name='question2' value='10'>10<br>";
        echo "<input type='radio' name='question2' value='20'>20<br>";
        echo "<input type='radio' name='question2' value='25'>25<br><br>";
        echo "</div>";
        echo "<input type='submit' name='submit' value='Submit' >";
    }
    if($subject == "Physics"){
        echo "Physics Exam hasnot been loaded yet please wait a few minutes";
    }
}
?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<h4>Select the exam you are going to take</h4>
    <select name="sub" id="sub">
        <option value="Math">Math</option>
        <option value="English">English</option>
        <option value="Physics">Physics</option>
        <option value="Aptitude">Aptitude</option>
        <option value="Select Exam" selected disabled>Select Exam</option>
    </select>
    <input type="submit" name="submit" value="Choose" >
    </form>
</div>
<div id="exampart">

</div>
<script src="js/main.js">

</script>
    
</body>
</html>
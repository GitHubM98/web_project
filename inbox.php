<?php
session_start();
include_once 'connection.php';
if (isset($_POST['submit'])) {
    $Password1 = $_POST['pass1'];
    $Login1 = $_POST['mail1'];
    $make1 = mysql_query("SELECT * FROM user WHERE `Login` = '$Login1'");
    $result1 = mysql_fetch_array($make1);
    $_SESSION['Password'] = $result1['Password'];
    $_SESSION['Login'] = $result1['Login'];
    $_SESSION['Name'] = $result1['Name'];
    $_SESSION['Surname'] = $result1['Surname'];
    $_SESSION['Id'] = $result1['Id'];
    if ($result1['Login'] == "admin@gmail.com" AND $result1['Password'] == "admin") {
        header("Location: admin/admin.php");
    }
    elseif ($result1['Login']!= $Login1 OR $result1['Password']!= $Password1) {
        echo "Your login or password is not correct";
        echo "<br>";
        echo "Maybe, you have not registred";
    }  
    else{
        header("Location:mail.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the SDU mail</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body onload='document.form1.mail1.focus()'>
<div class="header1">
</div>
<div class="menu1">
<div id="menu1">
    	<ul>
        	<li><a href="index.php">SDU mail</a></li>
            <li><a href="inbox.php">Inbox</a></li>
            <li><a href="app.php">Download the app</a></li>
            <li><a href="feat.php">Features</a></li>
            <li><a href="supp.php">Support</a></li>
        </ul>
    	<ul style="float:right; margin-right: 100px;">
        	<li><a href="signin.php">SIGN IN</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
        </ul>
</div>
</div>
<div class="menu2">
<div id="menu2">
    	<ul style="float:right; margin-right: 700px;">
        	<li><a href="term.php">Terms</a></li>
            <li><a href="priv.php">Privacy</a></li>
        </ul>
</div>
</div>
<form action="" method="POST" name="form1" >
<div class="signin3"> <br><p style="font-size: 20px; text-align: center;">Login<p><br><br>
    <input type="text" placeholder="Username" maxlength="100" size="50" style="margin-left: 80px;" name="mail1"><br><br>
    <input type="password" name="pass1"placeholder="Password" maxlength="100" size="50" required="required" style="margin-left: 80px;"><br><br>
    <a href="forgot.php"style="margin-left: 80px; text-decoration: none;">Forgot your password?   </a>
    <input type="checkbox" value="" id="1" style="margin-left: 55px;"/> 
    <label for="1">Remember me</label>
    <br><br>
    <input type="submit" name="submit" value="ENTER" style="margin-left: 80px;" onclick="ValidateEmail(document.form1.mail1)"/>
    <label for=""><a href="signup.php" style="margin-left: 175px; text-decoration: none;">Registration</a></label>
</div>
</form>
</body>
</html>
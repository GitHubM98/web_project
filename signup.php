<?php
include_once 'connection.php';
if (isset($_POST['register'])) {
    $Password = $_POST['password'];
    $Login = $_POST['login'];
    $Name = $_POST['name'];
    $Surname = $_POST['surname'];
    $make = mysql_query("INSERT INTO user (`Login`,`Password`,`Name`,`Surname`) VALUES ('$Login','$Password','$Name','$Surname')"); 
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the SDU mail</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
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
<div class="header4">
<form action="" method="POST">
<input type="email" placeholder="Email" name="login" required="required"/>
<br>
<input type="password" placeholder="Password" name="password"required="required"/>
<br>
<input type="text" placeholder="Name"  name="name" size="width:100px; height:200px;" required="required" />
<br>
<input type="text" placeholder="Surname" name="surname" required="required"/>
<br>
<input type="submit" value="SIGNUP" name="register"/>
</form>         
</form>
</body>
</html>
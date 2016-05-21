<?php
    require 'auth.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
</body>
</html>
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
            <li><a href="mail.php?do=logout">LOG OUT</a></li>
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
</body>
</html>
<?php
    session_start();

    $data = new mysqli("localhost","root","","make");
    $check = $data->query("SELECT * FROM user WHERE `Login`='$_SESSION[Login]'");
    $row = $check->fetch_row();
    $_SESSION['Id'] = $row[0];
?>

<html>
<head>
    <title>Message</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
    <div class="main">
        <div style="margin-left:100px; margin-top:100px; z-index:-1">
                <div>
                    <?php echo "<br>Name : ".$row[3].'<br><br>'; ?>
                    <?php echo "Surname : ".$row[4].'<br><br>'; ?>      
                </div>
            <div>  
                <?php
                    $result = $data->query("SELECT `Id`, `Login`, `Password`, `Name`, `Surname` FROM user;");
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<form class='add_news' action='messages.php' method='GET'>".
                                    "<p> ".$row['Name']." ".$row['Surname']."</p>".
                                    "<input type='text' value='".$row['Id']."' name='to_mess' style='display:none;'></input>".
                                    "<input type='text' value='".$_SESSION['Id']."' name='from_mess' style='display:none;'></input>".
                                    "<input type='submit' name='start_chat' value='start chat' class='start_chat'></input>".
                                "</form>";
                                
                        }
                    }
            
                ?>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
</html>
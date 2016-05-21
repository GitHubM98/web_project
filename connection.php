<?php
$result = mysql_connect("localhost","root","");
	mysql_select_db("make",$result);
	if ($result=="") {
		echo "aaa";
	}
	else{
		mysql_error();
	}
?>
<?php
session_start();//отдельная сессия для каждого пользователя
$message="";
if(count($_POST)>0) 
{
	//$conn = mysql_connect("localhost","root","");
	//mysql_select_db("phppot_examples",$conn);
	
	$bd_connect = new mysqli("localhost", "root", "", "testbd");
	if(!$bd_connect)
	{
	echo 'Невозможно соединиться: '.mysqli_error();
	}
	$bd_connect->query("SET NAMES 'utf8'");
	
	$result= $bd_connect->query("SELECT * FROM `news` WHERE `title` = 'Pogoda';
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) 
	{
		$_SESSION["user_id"] = $row[id];
		$_SESSION["user_name"] = $row[name];
	} 
	else 
	{
		$message = "Invalid Username or Password!";
	}
}
if(isset($_SESSION["user_id"])) 
{
	header("Location:user_dashboard.php");
}
?>


<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <form name="frmUser" method="post" action="">
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
    <tr class="tableheader">   
        <td align="center" colspan="2">Enter Login Details</td>
    </tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="userName"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>

</html>
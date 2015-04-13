<?php
session_start();
include_once 'db.php';

$uid = isset($_POST['formID']) ? $_POST['formID'] : $_SESSION['formID'];
$pwd = isset($_POST['formpass']) ? $_POST['formpass'] : $_SESSION['formpass'];

if(isset($uid)) {
	$_SESSION['formID'] = $uid;
	$_SESSION['formpass'] = $pwd;

	dbConnect('SquareOne');
	$sql = "SELECT * FROM Sessions WHERE
	        user_name = '$uid' AND password = '$pwd'";
	$result = mysql_query($sql);
	if (!$result) {
	  error('A database error occurred while checking your '.
	        'login details.\\nIf this error persists, please '.
	        'contact you@example.com.');
	}
	if (mysql_num_rows($result) == 0) {
	  unset($_SESSION['formID']);
	  unset($_SESSION['formpass']);
	  unset($uid);
	  unset($pwd);
	}
	else{
		$username = mysql_result($result,0,'name');
	}
}
?>
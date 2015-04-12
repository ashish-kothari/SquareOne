<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'SquareOne'); 
define('DB_USER','root'); 
define('DB_PASSWORD','tiger'); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

session_start();
function Login(){
	$uid = $_POST['formID'];
	$pwd = $_POST['formpass'];
	$_SESSION['uid'] = $uid;
	$_SESSION['pwd'] = $pwd;

	$sql = "SELECT * FROM Sessions WHERE
	        user_name = '$uid' AND password = '$pwd'";
	$result = mysql_query($sql);
	if (!$result) {
	  error('A database error occurred while checking your '.
	        'login details.');
	}
	if (mysql_num_rows($result) == 0) {
	  unset($_SESSION['uid']);
	  unset($_SESSION['pwd']);
	  echo "Login unsuccessful. Please try again!";
	}
	else{
		echo "Login successful!";
	}
}

if($_POST['formSubmit'] == "Login") 
 {
 	Login();
 }
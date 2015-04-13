<?php  
  define('DB_HOST', 'localhost');
  define('DB_USER','root'); 
  define('DB_PASSWORD','tiger'); 

  function dbConnect($db = ''){
	  $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());

	  $dbs=mysql_select_db($db,$con) or die("Failed to connect to MySQL: " . mysql_error());

	  return $con;
  }
 ?>
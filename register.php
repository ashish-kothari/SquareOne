<?php  
  define('DB_HOST', 'localhost'); 
  define('DB_NAME', 'SquareOne'); 
  define('DB_USER','root'); 
  define('DB_PASSWORD','tiger'); 
  $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
  $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

 function NewUser()
 {
  $name = $_POST['formname'];
  $userID = $_POST['formID'];
  $mail = $_POST['formmail'];
  $pass = $_POST['formpass'];
  $query = "INSERT INTO Sessions (name,user_name,email,password) VALUES ('$name','$userID','$mail', '$pass')";
  
  $data = mysql_query ($query)or die(mysql_error()); 
  
  if($data) 
  	{ 
  		die(json_encode(array("msg" => "YOUR REGISTRATION IS COMPLETED...", "error" => false))); 
  	}

  }
 
  function SignUp() 
  { 
  	// if(!empty($_POST['formID'])) //checking the 'user' name which is from Login.php, is it empty or have some text 
  	// { 

		$userID = $_POST['formID'];

		$query = mysql_query("SELECT * FROM Sessions WHERE user_name = '$userID' ") or die(mysql_error()); //AND pass = '$_POST[formpass]'

		$row = mysql_fetch_array($query);

		if($row[2]==$userID) 
			{ 

      die(json_encode(array("msg" => "already exists...", "error" => true))); 
    				
			} 
			else
			{
				NewUser(); 
			}

  	// }
  	// else
  	// {
  	// 	echo " Fill the form correctly...";
  	// } 
  }

 if($_POST['formSubmit'] == "Submit") 
 {
 	SignUp();
 } else {

      die(json_encode(array("msg" => "formSubmit not Submit", "error" => true))); 
       }

    
?>
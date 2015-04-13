<?php

	session_start();
	$_SESSION = array();
	session_destroy();
	unset($uid);
	unset($pwd);

?>
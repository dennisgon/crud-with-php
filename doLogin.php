<?php
	session_start();

	//Starting connection	
	$connection = mysql_connect("localhost", "root", "");
	//Select DB
	$db = mysql_select_db("amdp3", $connection);


	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);
	$_SESSION['username'];
	$_SESSION['password'];


	$query = mysql_query("select username from msmember where username='$username' AND password='$password'", $connection);
	$rows = mysql_num_rows($query);
	
	$username='';

	if($rows != 0){
		$data = mysql_fetch_array($query, MYSQL_ASSOC);

		$username = $data['username'];

		$_SESSION['username'] = $username;
		if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on'){
		    $hour = time() + 3600 * 24 * 30;
		    setcookie('username', $username, $hour);
		    header("location: index.php");
    	}else{
    		header("location: index.php");
    	}
			
	}
	else
		header("location:index.php?err=2");


	mysql_close($connection);
?>
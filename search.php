<?php
 $servername = "localhost";
	$usernamedb = "root";
	$passworddb = "";
	$dbname = "amdp3";
	$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
 
 $title=$_POST["title"];
 
 
 $result=mysql_query("SELECT * FROM msmember where nama like '%$title%'");
 $found=mysql_num_rows($result);
 
 if($found>0){
 	while($row=mysql_fetch_array($result)){
 	echo "<li>$row[post_title]</br>
 	        <a href=$row[guid]>$row[guid]</a></li>";
    }   
 }else{
 	echo "<li>No member<li>";
 }
 // ajax search
?>
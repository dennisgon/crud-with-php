<?php
	$servername = "localhost";
	$usernamedb = "root";
	$passworddb = "";
	$dbname = "amdp3";
		$bookTitle = $_POST['bookTitle'];
		$author = $_POST['author'];
		$stock = $_POST['stock']; 
		$lokasi_file = $_FILES['image']['tmp_name'];
  		$tipe_file   = $_FILES['image']['type'];
  		$nama_file   = $_FILES['image']['name'];
  		$direktori   = "image/$nama_file";
	// Create connection
	$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO msbook VALUES (null, '$bookTitle', '$author','$nama_file','$stock')";

	if (mysqli_query($conn, $sql)) {
	    header("location: index.php");
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
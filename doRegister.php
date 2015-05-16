<?php
	$servername = "localhost";
	$usernamedb = "root";
	$passworddb = "";
	$dbname = "amdp3";
		$username = $_POST['username'];
		$password = $_POST['password'];
				$password = md5($password);
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$lokasi_file = $_FILES['image']['tmp_name'];
  		$tipe_file   = $_FILES['image']['type'];
  		$nama_file   = $_FILES['image']['name'];
  		$direktori   = "image/$nama_file";
  		$gender = "";
  		$gender_dipilih = $_POST['gender']; 
  		if ($gender_dipilih == "Male") {
  			$gender = "Male";
  		}else{
  			$gender = "Female";
  		}
	// Create connection
	$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO msmember (MemberId, username, Password,	FullName,Email,address,Phone,image,gender)
	VALUES (null, '$username', '$password','$fullname','$email','$address','$phone','$nama_file','$gender')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	    header("location: index.php");
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
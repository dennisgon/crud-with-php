<?php
	session_start();
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id = "border">
	<div id="header">
		<h1>Register</h1>
	</div>
	<div id="nav">
		<p align="Center"><a href="index.php" style="color:white">Home</a></p>
	</div>
	<div id="content">
		<form name="Register" action="doRegister.php" method="post" enctype="multipart/form-data">
			<table>

					<tr>
						<td>username</td>
						<td><input type="text" placeholder ="Input username" name="username" id= "username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" placeholder ="Input Password" name="password" id= "password"></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password"placeholder ="confirm password" id= "cpassword"></td>
					</tr>					
					<tr>
						<td>Full Name</td>
						<td><input type="text"placeholder ="Input full name" name="fullname" id= "fullname"></td>
					</tr>					
					<tr>
						<td>Image</td>
						<td><input type="file" name="image"></td>
					</tr>	
					<tr>
						<td>Email</td>
						<td><input type="email"placeholder ="Input Email" name ="email" id= "email"></td>
					</tr>	
					<tr>
						<td>Gender</td>
						<td><input type="radio" value="Male" name="gender" id="male">Male<input type="radio" value="Female" name="gender" id="female">Female</td>
					</tr>					
					<tr>
						<td>Address</td>
						<td><textarea rows="10" cols="30"placeholder ="Input address" name="address" id= "address"></textarea></td>
					</tr>					
					<tr>
						<td>phone</td>
						<td><input type="text" placeholder ="Input phone" name ="phone" id= "phone"></td>
					</tr>

			</table>
			<br>
			<span id="error" style="color:red"></span>
			<br>
			<input type="submit" value = "submit" onclick="validation('book'); return false;">

		</form>
	</div>

	</div>


</body>

<script>

		function validation(){
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;
			var cpassword = document.getElementById('cpassword').value;
			var address = document.getElementById('address').value;
			var fullname = document.getElementById('fullname').value;
			var email = document.getElementById('email').value;
			var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
			var phone = document.getElementById('phone').value;
			var male = document.getElementById('male').checked;
			var female = document.getElementById('female').checked;
			var error = 0;
			if(username=="" || username == null){
				document.getElementById('error').innerHTML = "*username harus di isi";
				error = 0;
			}else if (username.length<3) {
				document.getElementById('error').innerHTML = "*username harus lebih dari 3";
			}else if(password=="" || password == null){
				document.getElementById('error').innerHTML = "*password harus di isi";
				error = 0;
			}else if (cpassword!=password) {
				document.getElementById('error').innerHTML = "*password dan confirm passowd harus sama";
				error = 0;
			}else if (fullname.search(/[^a-zA-Z]+/) != -1||fullname == "") {
				document.getElementById('error').innerHTML = "*fullname harus character";
				error = 0;
			}else if (address.indexOf("street") == -1) {
				document.getElementById('error').innerHTML = "*address harus memiliki kata street";
				error = 0;
			}else if (email==""||!re.test(email)) {
				document.getElementById('error').innerHTML = "*email address tidak sesuai";
				error = 0;

			}else if(isNaN(phone)==true||phone==""){
				document.getElementById('error').innerHTML = "*telepon harus angka";
				error = 0;
			}else if (male == false&& female == false) {
				document.getElementById('error').innerHTML = "*pilih gender";
				error = 0;
			}else{
				error =1;
			}
			if(error==1){
				book.submit();
			}

		}
	
</script>
</html>
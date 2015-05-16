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
		<?php
					if(isset($_SESSION['username'])){
				?>
				<p align="Center"></p>
				<table style="width: 790px">
					<tr>
						<td><a href="#" style="color:white">Home</td>
						<td><a href="catalog.php" style="color:white">Catalog</td>
						<td>Home</td>
						<td>Home</td>
						<td ><a href="logOut.php" style="color:white">logOut</a></td>
					</tr>
				</table>
					
			<?php
					}
					else{
			?>
				<p align="Center"><a href="Register.php" style="color:white">Register</a></p>
			<?php
				}
			?>
	</div>
	<div id="content">
		<form action="doRegister.php" method="post">
			<table>

					<tr>
						<td>Book Title</td>
						<td><input type="text" placeholder ="Input Book Title" name="username"></td>
					</tr>
					<tr>
						<td>Author</td>
						<td><input type="text"placeholder ="Input Author" name="password"></td>
					</tr>
					<tr>
						<td>Stock</td>
						<td><input type="text"placeholder ="Input Stock"></td>
					</tr>									
			</table>
			<br>
			<span></span>
			<input type="submit" value = "submit">

		</form>
	</div>

	</div>


</body>
</html>
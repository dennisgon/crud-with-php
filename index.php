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
			<h1>Metamorph Knowledge Center</h1>
		</div>
		<div id="nav">
				<?php
					if(isset($_SESSION['username'])){
				?>
				<p align="Center"></p>
				<table style="width: 790px">
					<tr>
						<td><a href="#" style="color:white">Home</td>
						<td><a href="catalog.php" style="color:white">Catalog</a></td>
						<td><a href="viewTransaction.php" style="color:white">view Transaction</a></td>
						<td><a href="listmember.php" style="color:white">list member</a></td>
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
		<div id="scontent">
			<div id="content1">
				<?php
					if(isset($_SESSION['username'])){
				?>
				welcome, <?php echo $_SESSION['username']; ?>
				<br>
				<p id="tanggal"></p>
				<br>
				metamorph knowledge center information:............
				<br>
				<br>
				Contact us..........

				<?php
					}
					else{
				?>

				welcome, guest
				<br>
				Fish Shop ET information
				<br>
				...................................
				<br>
				<p id="tanggal"></p>
				<br>
				Contact us..........
				<?php
					}
				?>
			</div>

				<div id="content2">
				<?php
					if(isset($_SESSION['username'])){
				?>
				<?php
					}else{
				?>
					<form action="doLogin.php" method="post">
					<table align="right">
						<tr><td colspan="2"><p align="center">LOGIN</p></td></tr>
						<tr>
							<td>
								Username
							</td>
							<td>
								<input type = "text" name="username">
							</td>
						</tr>
						<tr>
							<td>
								Password
							</td>
							<td>
								<input type ="password" name="password">
							</td>
						</tr>
						<tr>
							<td><input type ="submit" value="login"></td>
							<td><input type="checkbox" name="remember_me" id="remember_me">Remember me</td>
						</tr>
						<tr>
							<td colspan="2">
							<label class="error" style="color:red">
								<?php
								if(isset($_GET['err']) && $_GET['err'] == 1)
									echo '* All fields must be filled.';
								else if(isset($_GET['err']) && $_GET['err'] == 2)
									echo '* Incorrect username and password combination.';
								?>
							</label>
							</td>
						</tr>
					</table>
					<br>

					<br>
				</form>
				</div>
				<?php
					}
				?>

		</div>

	</div>


</body>
<script>
	var currentTime = new Date();
	var month = currentTime.getMonth() + 1;
	var day = currentTime.getDate();
	var year = currentTime.getFullYear();
	var	tanggal = (month + "/" + day + "/" + year);
	document.getElementById('tanggal').innerHTML = tanggal;
</script>
</html>
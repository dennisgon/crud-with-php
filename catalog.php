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
		<h1>Catalog</h1>
	</div>
	<div id="nav">
		<?php
					if(isset($_SESSION['username'])){
				?>
				<p align="Center"></p>
				<table style="width: 790px">
					<tr>
						<td><a href="index.php" style="color:white">Home</td>
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
		<?php
	      // koneksi database
			$servername = "localhost";
			$usernamedb = "root";
			$passworddb = "";
			$dbname = "amdp3";
	   		$conn = mysql_connect("localhost", "root", "");
	   		$db = mysql_select_db("amdp3", $conn);
				$query = mysql_query("select booktitle,author,stock,bookimage from msbook", $conn);
				$rows = mysql_num_rows($query);
				if (is_null($query)) {
					$rows = 0;
				}
	  
	    ?>
	    <p>Welcome, Username</p>
		<form>
		<input type="text" size="30" onkeyup="showResult(this.value)">
		<div id="livesearch"></div>
		</form>
		<table border=1 id ="isiTable">
			<tr>
				<th>Book Title</th>
				<th>Author</th>
				<th>Stock</th>
				<th>Avaible</th>
				<th>Image</th>

			</tr>
			<thead>
				</thead>
				<tbody>
					<?php
						while($data = mysql_fetch_array($query, MYSQL_NUM)){
					?>
					<tr>
						<td> <?php echo $data['0']; ?> </td>
						<td> <?php echo $data['1']; ?> </td>
						<td> <?php echo $data['2']; ?> </td>
						<td>  </td>
						<td><img src="image/<?php echo $data['3']; ?>" width = "50px" height = "50px"> </td>

					</tr>
					<?php
						}

						mysql_close($conn);
					?>
		</table>
	</div>

	</div>


</body>

</html>
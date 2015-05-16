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
		<p>ini nav</p>
	</div>
	<div id="content">
		<form name="book" action="doAddBook.php" method="post" enctype="multipart/form-data" >
			<table>

					<tr>
						<td>Book Title</td>
						<td><input type="text" placeholder ="Input Book Title" name="bookTitle" id ="bookTitle"></td>
					</tr>
					<tr>
						<td>Author</td>
						<td><input type="text"placeholder ="Input Author" name="author" id="author"></td>
					</tr>
					<tr>
						<td>Stock</td>
						<td><input type="text"placeholder ="Input Stock" name="stock" id="stock"></td>
					</tr>									
					<tr>
						<td>Image</td>
						<td><input type ="FIle" value="browse" name="image"></td>
					</tr>	
			</table>
			<br>
			<span id="error"></span>
			<br>
			<input type="button" value = "submit" onclick="validation('book'); return false;">

		</form>
	</div>

	</div>


</body>
<script>

		function validation(){
			var bookTitle = document.getElementById('bookTitle').value;
			var author = document.getElementById('author').value;
			var stock = document.getElementById('stock').value;
			var error = 0;
			if(bookTitle=="" || bookTitle == null){
				document.getElementById('error').innerHTML = "bookTitle harus di isi"
				error = 0;
			}else if(author=="" || author == null){
				document.getElementById('error').innerHTML = "author harus di isi"
				error = 0;
			}else if (stock=="" || stock == null) {
				document.getElementById('error').innerHTML = "stock harus di isi"
			}else if (isNaN(stock)) {

				document.getElementById('error').innerHTML = "stock harus angka"
			}else{
				error =1;
			}
			if(error==1){
				book.submit();
			}

		}
	
</script>
</html>
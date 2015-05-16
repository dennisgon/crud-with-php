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
		<h1>List Member</h1>
	</div>
	<div id="nav">
		<p>ini nav</p>
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
				$query = mysql_query("select image,username,fullname,email,phone from msmember", $conn);
				$rows = mysql_num_rows($query);
				if (is_null($query)) {
					$rows = 0;
				}
	  
	    ?>
    	<input type="text" id="search" placeholder="Search"/>
        <input type="button" id="button" value="Search" />
        <ul id="result"></ul>
		<table border=1 id ="isiTable" style="width: 600px">
			<tr>
				<th>image</th>
				<th>username</th>
				<th>full name</th>
				<th>email</th>
				<th>phone</th>

			</tr>
			<thead>
				</thead>
				<tbody>
					<?php
						while($data = mysql_fetch_array($query, MYSQL_NUM)){
					?>
					<tr>
						<td><img src="image/<?php echo $data['0']; ?>" width = "50px" height = "50px"> </td>
						<td> <?php echo $data['1']; ?> </td>
						<td class="nr"> <?php echo $data['2']; ?> </td>
						<td><a href="<?php echo $data['3']; ?>"><?php echo $data['3']; ?></a>  </td>
						<td> <?php echo $data['4']; ?> </td>
						<td>
							<form action="doBan.php" method="post" name="ban" style="width: 100px" ><a href="#" onclick="document.forms['ban'].submit();" class="mybutton">Ban</a></form>
							</td>

					</tr>
					<?php
						}
						mysql_close($conn);
					?>
		</table>
	</div>

	</div>


</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                 
                 function search(){
 
                      var title=$("#search").val();
 
                      if(title!=""){
                        $("#result").html("<img alt="ajax search" src='ajax-loader.gif'/>");
                         $.ajax({
                            type:"post",
                            url:"search.php",
                            data:"title="+title,
                            success:function(data){
                                $("#result").html(data);
                                $("#search").val("");
                             }
                          });
                      }
                      
 
                     
                 }
 
                  $("#button").click(function(){
                  	 search();
                  });
 
                  $('#search').keyup(function(e) {
                     if(e.keyCode == 13) {
                        search();
                      }
                  });
            });
        </script>
</html>
<?php
	session_start();
	if (isset($_SESSION['username'])){
		session_destroy();
		if(isset($_GET['redirect'])) {
 header('Location: '.base64_decode($_GET['redirect']));  
} else {
 header('Location: index.php');  
}
	}

?>
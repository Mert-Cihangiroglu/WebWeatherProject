<?php
//connect to the server and select database
	include 'connection.php' ;
	// Get values pass from in login.php file
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	


	// Query the database for user
	$sql = "select * from users where username = '$username' and password = '$password'" ;
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	if ($row['username'] == NULL && $row['password'] == NULL ){
		echo '<script language="javascript">';
		echo 'alert("CHECK USERNAME OR PASSWORD");';
		echo 'window.location = "login.php"';
		echo '</script>';
	}
	if ($row['username'] == $username && $row['password'] == $password ) {
		
		echo '<script>
		window.location = "adminpage.php";
		</script>';	
		
	} else {
		echo '<script language="javascript">';
		echo 'alert("CHECK USERNAME OR PASSWORD");';
		echo 'window.location = "login.php"';
		echo '</script>';
	}
	
	
?>
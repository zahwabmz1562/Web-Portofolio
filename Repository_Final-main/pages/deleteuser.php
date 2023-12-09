<?php
require_once('./class/class.User.php'); 		

if(isset($_GET['emailUser'])){	
	$objUser = new User(); 
	$objUser->emailUser = $_GET['emailUser'];	
	$objUser->DeleteUser();
	echo "<script> alert('$objUser->message'); </script>";
	echo "<script>window.location = 'dashboard_admin.php?p=userlist'</script>";					
}
else{		
	echo '<script>window.history.back()</script>';	
}
?>


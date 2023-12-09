<?php
require_once('./class/class.Pemilik.php'); 		

if(isset($_GET['emailPemilik'])){	
	$objPemilik = new Pemilik(); 
	$objPemilik->emailPemilik = $_GET['emailPemilik'];	
	$objPemilik->DeletePemilik();
	echo "<script> alert('$objPemilik->message'); </script>";
	echo "<script>window.location = 'dashboard_admin.php?p=pemiliklist'</script>";					
}
else{		
	echo '<script>window.history.back()</script>';	
}
?>


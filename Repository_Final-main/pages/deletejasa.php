<?php
require_once('./class/class.Jasa.php'); 		

if(isset($_GET['idJasa'])){	
	$objJasa = new Jasa(); 
	$objJasa->idJasa = $_GET['idJasa'];	
	$objJasa->DeleteJasa();
	echo "<script> alert('$objJasa->message'); </script>";
	echo "<script>window.location = 'dashboard_admin.php?p=jasalist'</script>";					
}
else{		
	echo '<script>window.history.back()</script>';	
}
?>


<?php
require_once('./class/class.Portofolio.php'); 		

if(isset($_GET['gambar'])){	
	$objPortofolio = new Portofolio(); 
	$objPortofolio->gambar = $_GET['gambarPortofolio'];	
	$objPortofolio->DeletePortofolio();
	echo "<script> alert('$objPortofolio->message'); </script>";
	echo "<script>window.location = 'dashboard_admin.php?p=Portofoliolist'</script>";					
}
else{		
	echo '<script>window.history.back()</script>';	
}
?>


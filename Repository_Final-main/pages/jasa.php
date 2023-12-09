<?php 
require_once('./class/class.Jasa.php'); 				
$objJasa = new Jasa(); 

if(isset($_POST['btnSubmit'])){	
    $objJasa->kategori = $_POST['kategori'];	 
	$objJasa->idJasa = $_POST['idJasa'];	
    $objJasa->emailPemilik = $_POST['emailPemilik'];	 
				
	if(isset($_GET['idJasa'])){		
		$objJasa->idJasa = $_GET['idJasa'];
		$objJasa->UpdateJasa();
	}
	else{	
		$objJasa->AddJasa();	
	}	
	
	echo "<script> alert('$objJasa->message'); </script>";
	if($objJasa->hasil){
		echo '<script> window.location = "dashboard_admin.php?p=jasalist";</script>';
	}				
}
else if(isset($_GET['idJasa'])){	
	$objJasa->idJasa= $_GET['idJasa'];	
	$objJasa->SelectOneJasa();

}
?>
<div class="container">  
<div class="col-md-6">			
  <h4 class="title"><span class="text"><strong>Jasa</strong></span></h4>
    <form action="" method="post">
	<table class="table" border="0">
	<tr>
	<td>Id Jasa</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="idJasa" value="<?php echo $objJasa->idJasa; ?>"></td>
	</tr>	
	<tr>
	<td>Kategori</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="kategori" value="<?php echo $objJasa->kategori; ?>"></td>
	</tr>	
    <tr>
	<td>Email Pemilik</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="emailPemilik" value="<?php echo $objJasa->emailPemilik; ?>"></td>
	</tr>	
	
	<tr>
	<td colspan="2"></td>	
	<td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
	    <a href="dashboard_admin.php?p=jasalist" class="btn btn-warning">Cancel</a></td>
	</tr>	
	</table>    
</form>	
</div>  
</div>
</div>
<br>
	


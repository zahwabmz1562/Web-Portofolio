<?php 
require_once('pemilik.php'); 				
 

if(isset($_POST['btnSubmit'])){	
	$objPemilik = new Pemilik();
    $objPemilik->namaPemilik = $_POST['namaPemilik'];	 
	$objPemilik->emailPemilik = $_POST['emailPemilik'];	
    $objPemilik->passwordPemilik = $_POST['passwordPemilik'];
	$objPemilik->noTelpPemilik = $_POST['noTelpPemilik'];	 
				
	if(isset($_GET['emailPemilik'])){		
		$objPemilik->emailPemilik = $_GET['emailPemilik'];
		$objPemilik->UpdatePemilik();
	}
	else {	
		$objPemilik->AddPemilik();	
	}	
	
	echo "<script> alert('$objPemilik->message'); </script>";
	if($objPemilik->hasil){
		echo '<script> window.location = "dashboard_admin.php?p=pemiliklist";</script>';
	}				
}
else if(isset($_GET['emailPemilik'])){	
	$objPemilik->emailPemilik= $_GET['emailPemilik'];	
	$objPemilik->SelectOnePemilik();

}
?>
<div class="container">  
<div class="col-md-6">			
  <h4 class="title"><span class="text"><strong>Pemilik</strong></span></h4>
    <form action="" method="post">
	<table class="table" border="0">
	<tr>
	<td>Email Pemilik</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="emailPemilik" value="<?php $objPemilik = new Pemilik(); echo $objPemilik->emailPemilik; ?>"></td>
	</tr>	
	<tr>
	<td>Nama Pemilik</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="namaPemilik" value="<?php $objPemilik = new Pemilik(); echo $objPemilik->namaPemilik; ?>"></td>
	</tr>	
	<tr>
	<td>No Telepon Pemilik</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="noTelpPemilik" value="<?php $objPemilik = new Pemilik(); echo $objPemilik->noTelpPemilik; ?>"></td>
	</tr>	
    <tr>
	<td>Password</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="passwordPemilik" value="<?php $objPemilik = new Pemilik(); echo $objPemilik->passwordPemilik; ?>"></td>
	</tr>	
	
	<tr>
	<td colspan="2"></td>	
	<td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
	    <a href="dashboard_admin.php?p=pemiliklist" class="btn btn-warning">Cancel</a></td>
	</tr>	
	</table>    
</form>	
</div>  
</div>
</div>
<br>
	


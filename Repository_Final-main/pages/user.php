<?php 
require_once('user.php'); 				
 

if(isset($_POST['btnSubmit'])){	
	$objUser = new User();
    $objUser->namaUser = $_POST['namaUser'];	 
	$objUser->emailUser = $_POST['emailUser'];	
    $objUser->password = $_POST['password'];
	$objUser->noTelpUser = $_POST['noTelpUser'];	 
				
	if(isset($_GET['emailUser'])){		
		$objUser->emailUser = $_GET['emailUser'];
		$objUser->UpdateUser();
	}
	else{	
		$objUser->AddUser();	
	}	
	
	echo "<script> alert('$objUser->message'); </script>";
	if($objUser->hasil){
		echo '<script> window.location = "dashboard_admin.php?p=userlist";</script>';
	}				
}
else if(isset($_GET['emailUser'])){	
	$objUser->emailUser= $_GET['emailUser'];	
	$objUser->SelectOneUser();

}
?>
<div class="container">  
<div class="col-md-6">			
  <h4 class="title"><span class="text"><strong>User</strong></span></h4>
    <form action="" method="post">
	<table class="table" border="0">
	<tr>
	<td>Email User</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="emailUser" value="<?php $objUser = new User(); echo $objUser->emailUser; ?>"></td>
	</tr>	
	<tr>
	<td>Nama User</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="namaUser" value="<?php $objUser = new User(); echo $objUser->namaUser; ?>"></td>
	</tr>	
	<tr>
	<td>No Telepon User</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="noTelpUser" value="<?php $objUser = new User(); echo $objUser->noTelpUser; ?>"></td>
	</tr>	
    <tr>
	<td>Password</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="password" value="<?php $objUser = new User(); echo $objUser->password; ?>"></td>
	</tr>	
	
	<tr>
	<td colspan="2"></td>	
	<td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
	    <a href="dashboard_admin.php?p=userlist" class="btn btn-warning">Cancel</a></td>
	</tr>	
	</table>    
</form>	
</div>  
</div>
</div>
<br>
	


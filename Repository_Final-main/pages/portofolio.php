
<?php 
include_once('./class/class.Protofolio.php'); 				

if(isset($_POST['btnSubmit'])){	
	$objPortofolio= new Portofolio(); 
    $objPortofolio->gambar = $_POST['gambar'];	 
	$objPortofolio->judul = $_POST['judul'];	
    $objPortofolio->deskripsiPortofolio = $_POST['deskripsiPortofolio'];
	$objPortofolio->tanggalPortofolio = $_POST['tanggalPortofolio'];	 
				
	if(isset($_GET['judul'])){		
		$objPortofolio->judul = $_GET['judul'];
		$objPortofolio->UpdatePortofolio();
	}
	else{	
		$objPortofolio->AddPortofolio();	
	}	
	
	echo "<script> alert('$objPortofolio->message'); </script>";
	if($objPortofolio->hasil){
		echo '<script> window.location = "dashboard_admin.php?p=portofoliolist";</script>';
	}				
}
else if(isset($_GET['judul'])){	
	$objPortofolio->judul= $_GET['judul'];	
	$objPortofolio->SelectOnePortofolio();

}
?>
<div class="container">  
<div class="col-md-6">			
  <h4 class="title"><span class="text"><strong>Portofolio</strong></span></h4>
  
    <form action="" method="POST">
	<table class="table" border="0">
	<tr>
	<td>Gambar</td>
	<td>:</td>
	<td><input type="file" class="form-control" name="gambar" value="<?php $objPortofolio = new Portofolio(); echo $objPortofolio->gambar; ?>"></td>
	</tr>	
	<tr>
	<td>Judul</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="judul" value="<?php $objPortofolio = new Portofolio(); echo $objPortofolio->judul; ?>"></td>
	</tr>	
	<tr>
	<td>Deskripsi Portofolio</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="tanggalPortofolio" value="<?php $objPortofolio = new Portofolio();echo $objPortofolio->tanggalPortofolio; ?>"></td>
	</tr>	
    <tr>
	<td>Tanggal Portofolio</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="deskripsiPortofolio" value="<?php $objPortofolio = new Portofolio();echo $objPortofolio->deskripsiPortofolio; ?>"></td>
	</tr>	
	
	<tr>
	<td colspan="2"></td>	
	<td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
	    <a href="dashboard_admin.php?p=portofoliolist" class="btn btn-warning">Cancel</a></td>
	</tr>	
	</table>    
</form>	
</div>  
</div>
</div>
<br>
	


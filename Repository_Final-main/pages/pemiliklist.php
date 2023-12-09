<div class="container">  
<div class="col-md-12">			
  <h4 class="title"><span class="text"><strong>Pemilik List</strong></span></h4>
  <a class="btn btn-primary" href="dashboard_admin.php?p=pemilik">Add</a>
  <br>
  <br>
<table class="table table-bordered">
<thead>
	<tr>
	<th>No.</th>
	<th>Nama Pemilik</th>
	<th>Email Pemilik</th>
	<th>No telephone Pemilik</th>
	<th>Action</th>
	</tr>	
</thead>
<tbody>
	<?php
		require_once('./class/class.Pemilik.php'); 		
		$objPemilik= new Pemilik(); 		
		$arrayResult = $objPemilik->SelectAllPemilik();

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataPemilik) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$dataPemilik->namaPemilik.'</td>';	
					echo '<td>'.$dataPemilik->emailPemilik.'</td>';
					echo '<td>'.$dataPemilik->noTelpPemilik.'</td>';
			
					echo '<td width="30%"><a class="btn btn-warning btn-sm"  href="dashboard_admin.php?p=pemilik&emailPemilik='.$dataPemilik->emailPemilik.'">Edit</a> |
   					          <a class="btn btn-danger btn-sm"  href="dashboard_admin.php?p=deletepemilik&emailPemilik='.$dataPemilik->emailPemilik.'" 
							  onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete</a>';							  
				echo '</tr>';
				
				$no++;	
			}
		}
		?>
		</tbody>
</table>

</div>
</div>



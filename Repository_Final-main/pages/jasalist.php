<div class="container">  
<div class="col-md-12">			
  <h4 class="title"><span class="text"><strong>Jasa List</strong></span></h4>
  <a class="btn btn-primary" href="dashboard_admin.php?p=jasa">Add</a>
  <br>
  <br>
<table class="table table-bordered">
<thead>
	<tr>
	<th>No.</th>
    <th>Id Jasa</th>
	<th>Kategori</th>
	<th>Email Pemilik</th>
	<th>Action</th>
	</tr>	
</thead>
<tbody>
	<?php
		require_once('./class/class.Jasa.php'); 		
		$objJasa= new Jasa(); 		
		$arrayResult = $objJasa->SelectAllJasa();

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataJasa) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
                    echo '<td>'.$dataJasa->idJasa.'</td>';
					echo '<td>'.$dataJasa->kategori.'</td>';						
					echo '<td>'.$dataJasa->emailPemilik.'</td>';
			
					echo '<td width="30%"><a class="btn btn-warning btn-sm"  href="dashboard_admin.php?p=jasa&idJasa='.$dataJasa->idJasa.'">Edit</a> |
   					          <a class="btn btn-danger btn-sm"  href="dashboard_admin.php?p=deletejasa&idJasa='.$dataJasa->idJasa.'" 
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



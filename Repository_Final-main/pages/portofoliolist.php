<div class="container">  
<div class="col-md-12">			
  <h4 class="title"><span class="text"><strong>Portofolio List</strong></span></h4>
  <a class="btn btn-primary" href="dashboard_admin.php?p=portofolio">Add</a>
  <br>
  <br>
<table class="table table-bordered">
<thead>
	<tr>
	<th>No.</th>
	<th>Gambar Portofolio</th>
	<th>Judul Portofolio</th>
	<th>Deskripsi Portofolio</th>
    <th>Tanggal Portofolio</th>
	<th>Action</th>
	</tr>	
</thead>
<tbody>
	<?php
		require_once('./class/class.Protofolio.php'); 		
		$objPortofolio= new Portofolio(); 		
		$arrayResult = $objPortofolio->SelectAllPortofolio();

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataPortofolio) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$dataPortofolio->gambar.'</td>';	
					echo '<td>'.$dataPortofolio->jasa.'</td>';
                    echo '<td>'.$dataPortofolio->deskripsiPortofolio.'</td>';
					echo '<td>'.$dataPortofolio->tanggalPortofolio.'</td>';
                    
			
					echo '<td width="30%"><a class="btn btn-warning btn-sm"  href="dashboard_admin.php?p=Portofolio&jasa='.$dataPortofolio->jasa.'">Edit</a> |
   					          <a class="btn btn-danger btn-sm"  href="dashboard_admin.php?p=deleteportofolio&jasa='.$dataPortofolio->jasa.'" 
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



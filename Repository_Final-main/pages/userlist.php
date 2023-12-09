<div class="container">  
<div class="col-md-12">			
  <h4 class="title"><span class="text"><strong>User List</strong></span></h4>
  <a class="btn btn-primary" href="dashboard_admin.php?p=user">Add</a>
  <br>
  <br>
<table class="table table-bordered">
<thead>
	<tr>
	<th>No.</th>
	<th>Nama User</th>
	<th>Email User</th>
	<th>No telephone User</th>
	<th>Action</th>
	</tr>	
</thead>
<tbody>
	<?php
		require_once('user.php'); 		
		$objUser= new User(); 		
		$arrayResult = $objUser->SelectAllUser();

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataUser) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$dataUser->namaUser.'</td>';	
					echo '<td>'.$dataUser->emailUser.'</td>';
					echo '<td>'.$dataUser->noTelpUser.'</td>';
			
					echo '<td width="30%"><a class="btn btn-warning btn-sm"  href="dashboard_admin.php?p=user&emailUser='.$dataUser->emailUser.'">Edit</a> |
   					          <a class="btn btn-danger btn-sm"  href="dashboard_admin.php?p=deleteuser&emailUser='.$dataUser->emailUser.'" 
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



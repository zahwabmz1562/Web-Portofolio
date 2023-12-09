<?php 	
	require "db_conn.php";			
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">		
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">  
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

</head>
<body>
<div class="example3">
  <nav class="navbar navbar-inverse navbar-static-top blue">
    <div class="container">
      <div id="navbar3" class="navbar-collapse collapse">
	    <ul class="nav navbar-nav"> 				            			
			<li><a href="dashboard_admin.php?p=homepage">Home</a></li>
			<li><a href="dashboard_admin.php?p=chat">Chat</a></li>
			<li><a href="dashboard_admin.php?p=jasalist">Jasa</a></li>
			<li><a href="dashboard_admin.php?p=userlist">User List</a></li>
			<li><a href="dashboard_admin.php?p=pemiliklist">Data Pemilik</a></li>
			<li><a href="dashboard_admin.php?p=portofoliolist">Portofolio</a></li>
			<li><a href="dashboard_admin.php?p=logout">Logout</a></li>
			            
        </ul>
      </div>      
    </div>
  </nav>
</div>
	<div class="container">		
	<div style="margin-bottom:10px">
	<?php
	//  echo "Welcome, <b>". $_SESSION["name"]."</b><br>";	
	 // echo "Anda login sebagai, <b>". $_SESSION["role"]."</b>";
	?>
	</div>
		<?php
				$pages_dir = 'pages';
				if(!empty($_GET['p'])){
					$pages = scandir($pages_dir, 0);
					unset($pages[0], $pages[1]);
					
					$p = $_GET['p'];
					if(in_array($p.'.php', $pages)){
						include($pages_dir.'/'.$p.'.php');
					} else {
						echo 'Halaman tidak ditemukan! :(';
					}
				} else {
					include($pages_dir.'/kosong.php');
				}
		?>
		
		<footer class="page-footer blue center-on-small-only">       
            <div class="footer-copyright text-center rgba-black-light">
                <div class="container-fluid">
                    © 2020 Copyright: <a href="https://www.esqbs.ac.id"> ESQ Business School </a>
                </div>
            </div>
        </footer>
	</div>	
	<script>
	$(document).ready( function () {
    	$('.table').DataTable();
	});
	</script>
</body>
</html>



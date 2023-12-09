<?php 
include 'connect.php';
  checkLoginAtLogin();
  if (isset($_POST['Login'])) {
  	$username = htmlspecialchars($_POST['username']);
  	$password = htmlspecialchars($_POST['password']);

  	$checkUsername = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
  	if ($data = mysqli_fetch_array($checkUsername)) {
  		if (password_verify($data['password'] , $password)) {
  			$_SESSION = [
				'id_user' => $data['id_user'],
  				'username' => $data['username']
  			];
  			header("Location: dashboard_admin.php");
  		} else {
			echo "Gagal login!", "Password yang anda masukkan salah!", "error";
			header("Location: Dashboard.php");
	  	}
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">  
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/528f4cddf5.js" crossorigin="anonymous"></script>

</head>
<body>
	<div 
	class="container">
     <form method="post">
     	<h2>LOGIN</h2>
     	<label>User Name</label>
     	<input required type="text" name="username	" id="username	"><br>
		<br>
     	<label>Password</label>
     	<input required type="password" name="password" id="password"><br>
		<br>
		<div class = "row">
		<div class="col-lg-4">
		<button class="btn btn-primary rounded-pill float-right" type="submit" name="Login"><i class="fas fa-fw fa-sign-in-alt"></i> Login</button>
		</div>
		 <div class="col-lg-7">
     	<a href="Register.php"class="btn btn-primary rounded-pill" type="submit" name="btnRegister">
					 Register</a>
		</div> 
		</div>
		</div>
	</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
<?php
include 'connect.php';
if (isset($_POST["Submit"])){
    $username = htmlspecialchars(addslashes(ucwords($_POST['username'])));
    $email = htmlspecialchars(addslashes(ucwords($_POST['emailUser'])));
    $password = htmlspecialchars(addslashes(ucwords($_POST['password'])));
	$epassword = password_hash($password, PASSWORD_DEFAULT);

		$checkUsername = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
		$cekUser = mysqli_num_rows($checkUsername);
		$checkEmail = mysqli_query($koneksi, "SELECT * FROM   user WHERE emailUser = '$email'");
		$cekemail = mysqli_num_rows($checkEmail);
  	if ($cekUser > 0) {
		setAlert("Gagal Daftar!", "Username Telah Terdaftar!", "error");
		header("Location: Register.php");
  		}
		else if($cekemail > 0){
			setAlert("Gagal Daftar!", "Email Telah Terdaftar!", "error");
			header("Location: Register.php");
		} else{	
            tambahUser($_POST);
			header("Location: Login.php");
        }
		}

?>
<!DOCTYPE html> 
<html>
  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h2>Registration Form</h2>
      <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="emailUser" name="emailUser" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="Submit">Register</button>
      </form>
    </div>
  </body>
</html>


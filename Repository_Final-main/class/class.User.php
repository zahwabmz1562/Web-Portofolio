<?php 
    
	
	class User extends Connection
	{
		private $namaUser='';
		private $emailUser = '';
		private $password = '';	
		private $noTelpUser;			
		private $hasil = false;
		private $message ='';
		
		public function __get($atribute) {
		if (property_exists($this, $atribute)) {
    		return $this->$atribute;
			}
		}

		public function __set($atribut, $value){
			if (property_exists($this, $atribut)) {
					$this->$atribut = $value;
			}
		}
        public function SelectAllUser(){
			$sql = "SELECT * FROM User";
			$result = mysqli_query($this->connection, $sql);	
			
			$arrResult = Array();
			$cnt=0;			
			if(mysqli_num_rows($result) > 0){	
				while ($data = mysqli_fetch_array($result)){
					$objUser= new User(); 
					$objUser->namaUser=$data['namaUser'];
					$objUser->emailUser=$data['emailUser'];
					$objUser->password=$data['password'];
					$objUser->noTelpUser=$data['noTelpUser'];
					$arrResult[$cnt] = $objUser;
					$cnt++;
				}   
			}
			return $arrResult;	
		}
        public function AddUser(){
			
			$sql = "INSERT INTO User (namaUser, emailUser, password,noTelpUser) 
			        VALUES ('$this->namaUser', '$this->emailUser', '$this->password', '$this->noTelpUser')";
				   echo $sql;
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil ditambahkan!';					
		    else
			   $this->message ='Data gagal ditambahkan!';	
		}
        public function UpdateUser(){
			$sql = "UPDATE User
			        SET namaUser='$this->namaUser',
                    password='$this->password',
                    noTelpUser='$this->noTelpUser'					
					WHERE emailUser = '$this->emailUser'";					
			
			$this->hasil = mysqli_query($this->connection, $sql);			
			
			if($this->hasil)
				$this->message ='Data berhasil diubah!';								
			else
				$this->message ='Data gagal diubah!';								
		}
        public function SelectOneUser(){
			$sql = "SELECT * FROM User WHERE emailUser='$this->emailUser'";
			$resultOne = mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));	
			if(mysqli_num_rows($resultOne) == 1){
				$this->hasil = true;
				$data = mysqli_fetch_assoc($resultOne);
				$this->namaUser=$data['namaUser'];
				$this->emailUser=$data['emailUser'];
				$this->password=$data['password'];
				$this->noTelpUser =$data['noTelpUser'];					
			}							
		}
        public function DeleteUser(){
			$sql = "DELETE FROM User WHERE emailUser='$this->emailUser'";
			$this->hasil = mysqli_query($this->connection, $sql);
			if($this->hasil)
				$this->message ='Data berhasil dihapus!';								
			else
				$this->message ='Data gagal dihapus!';
		}
    }
    ?>
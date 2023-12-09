<?php 
    
	
	class Pemilik extends Connection
	{
		private $namaPemilik='';
		private $emailPemilik = '';
		private $passwordPemilik = '';	
		private $noTelpPemilik;			
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
        public function SelectAllPemilik(){
			$sql = "SELECT * FROM Pemilik";
			$result = mysqli_query($this->connection, $sql);	
			
			$arrResult = Array();
			$cnt=0;			
			if(mysqli_num_rows($result) > 0){	
				while ($data = mysqli_fetch_array($result)){
					$objPemilik= new Pemilik(); 
					$objPemilik->namaPemilik=$data['namaPemilik'];
					$objPemilik->emailPemilik=$data['emailPemilik'];
					$objPemilik->passwordPemilik=$data['passwordPemilik'];
					$objPemilik->noTelpPemilik=$data['noTelpPemilik'];
					$arrResult[$cnt] = $objPemilik;
					$cnt++;
				}   
			}
			return $arrResult;	
		}
        public function AddPemilik(){
			
			$sql = "INSERT INTO pemilik (namaPemilik, emailPemilik, passwordPemilik,noTelpPemilik) 
			        VALUES ('$this->namaPemilik', '$this->emailPemilik', '$this->passwordPemilik', '$this->noTelpPemilik')";
				   echo $sql;
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil ditambahkan!';					
		    else
			   $this->message ='Data gagal ditambahkan!';	
		}
        public function UpdatePemilik(){
			$sql = "UPDATE pemilik
			        SET namaPemilik='$this->namaPemilik',
                    passwordPemilik='$this->passwordPemilik',
                    noTelpPemilik='$this->noTelpPemilik'					
					WHERE emailPemilik = '$this->emailPemilik'";					
			
			$this->hasil = mysqli_query($this->connection, $sql);			
			
			if($this->hasil)
				$this->message ='Data berhasil diubah!';								
			else
				$this->message ='Data gagal diubah!';								
		}
        public function SelectOnePemilik(){
			$sql = "SELECT * FROM pemilik WHERE emailPemilik='$this->emailPemilik'";
			$resultOne = mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));	
			if(mysqli_num_rows($resultOne) == 1){
				$this->hasil = true;
				$data = mysqli_fetch_assoc($resultOne);
				$this->namaPemilik=$data['namaPemilik'];
				$this->emailPemilik=$data['emailPemilik'];
				$this->passwordPemilik=$data['passwordPemilik'];
				$this->noTelpPemilik =$data['noTelpPemilik'];					
			}							
		}
        public function DeletePemilik(){
			$sql = "DELETE FROM pemilik WHERE emailPemilik='$this->emailPemilik'";
			$this->hasil = mysqli_query($this->connection, $sql);
			if($this->hasil)
				$this->message ='Data berhasil dihapus!';								
			else
				$this->message ='Data gagal dihapus!';
		}
    }
    ?>
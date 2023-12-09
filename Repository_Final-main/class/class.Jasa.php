<?php 
    
	
	class Jasa extends Connection
	{
		private $kategori='';
		private $idJasa = '';
		private $emailPemilik = '';			
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
        public function SelectAllJasa(){
			$sql = "SELECT * FROM Jasa";
			$result = mysqli_query($this->connection, $sql);	
			
			$arrResult = Array();
			$cnt=0;			
			if(mysqli_num_rows($result) > 0){	
				while ($data = mysqli_fetch_array($result)){
					$objJasa= new Jasa(); 
					$objJasa->kategori=$data['kategori'];
					$objJasa->idJasa=$data['idJasa'];
					$objJasa->emailPemilik=$data['emailPemilik'];
					$arrResult[$cnt] = $objJasa;
					$cnt++;
				}   
			}
			return $arrResult;	
		}
        public function AddJasa(){
			
			$sql = "INSERT INTO Jasa (kategori, idJasa, emailPemilik) 
			        VALUES ('$this->kategori', '$this->idJasa', '$this->emailPemilik')";
				   echo $sql;
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil ditambahkan!';					
		    else
			   $this->message ='Data gagal ditambahkan!';	
		}
        public function UpdateJasa(){
			$sql = "UPDATE Jasa
			        SET kategori='$this->kategori',
                    emailPemilik='$this->emailPemilik'				
					WHERE idJasa = '$this->idJasa'";					
			
			$this->hasil = mysqli_query($this->connection, $sql);			
			
			if($this->hasil)
				$this->message ='Data berhasil diubah!';								
			else
				$this->message ='Data gagal diubah!';								
		}
        public function SelectOneJasa(){
			$sql = "SELECT * FROM Jasa WHERE idJasa='$this->idJasa'";
			$resultOne = mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));	
			if(mysqli_num_rows($resultOne) == 1){
				$this->hasil = true;
				$data = mysqli_fetch_assoc($resultOne);
				$this->kategori=$data['kategori'];
				$this->idJasa=$data['idJasa'];
				$this->emailPemilik=$data['emailPemilik'];
			}							
		}
        public function DeleteJasa(){
			$sql = "DELETE FROM Jasa WHERE idJasa='$this->idJasa'";
			$this->hasil = mysqli_query($this->connection, $sql);
			if($this->hasil)
				$this->message ='Data berhasil dihapus!';								
			else
				$this->message ='Data gagal dihapus!';
		}
    }
    ?>
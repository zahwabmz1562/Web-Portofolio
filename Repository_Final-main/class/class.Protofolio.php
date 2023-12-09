<?php 
    
	
	class portofolio extends Connection
	{
		private $gambar='';
		private $judul = '';
		private $deskripsiportofolio = '';	
		private $tanggalportofolio;			
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
        public function SelectAllPortofolio(){
			$sql = "SELECT * FROM informasi_portofolio";
			$result = mysqli_query($this->connection, $sql);	
			
			$arrResult = Array();
			$cnt=0;			
			if(mysqli_num_rows($result) > 0){	
				while ($data = mysqli_fetch_array($result)){
					$objportofolio= new portofolio(); 
					$objportofolio->gambar=$data['gambar'];
					$objportofolio->judul=$data['judul'];
					$objportofolio->deskripsiportofolio=$data['deskripsiPortofolio'];
					$objportofolio->tanggalportofolio=$data['tanggalPortofolio'];
					$arrResult[$cnt] = $objportofolio;
					$cnt++;
				}   
			}
			return $arrResult;	
		}
        public function Addportofolio(){
			
			$sql = "INSERT INTO informasi_portofolio (gambar, judul, deskripsiPortofolio,tanggalPortofolio) 
			        VALUES ('$this->gambar', '$this->judul', '$this->deskripsiPortofolio', '$this->tanggalPortofolio')";
				   echo $sql;
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil ditambahkan!';					
		    else
			   $this->message ='Data gagal ditambahkan!';	
		}
        public function Updateportofolio(){
			$sql = "UPDATE portofolio
			        SET gambar='$this->gambar',
                    deskripsiportofolio='$this->deskripsiportofolio',
                    tanggalportofolio='$this->tanggalportofolio'					
					WHERE judul = '$this->judul'";					
			
			$this->hasil = mysqli_query($this->connection, $sql);			
			
			if($this->hasil)
				$this->message ='Data berhasil diubah!';								
			else
				$this->message ='Data gagal diubah!';								
		}
        public function SelectOneportofolio(){
			$sql = "SELECT * FROM portofolio WHERE judul='$this->judul'";
			$resultOne = mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));	
			if(mysqli_num_rows($resultOne) == 1){
				$this->hasil = true;
				$data = mysqli_fetch_assoc($resultOne);
				$this->gambar=$data['gambar'];
				$this->judul=$data['judul'];
				$this->deskripsiportofolio=$data['deskripsiportofolio'];
				$this->tanggalportofolio =$data['tanggalportofolio'];					
			}							
		}
        public function Deleteportofolio(){
			$sql = "DELETE FROM portofolio WHERE judul='$this->judul'";
			$this->hasil = mysqli_query($this->connection, $sql);
			if($this->hasil)
				$this->message ='Data berhasil dihapus!';								
			else
				$this->message ='Data gagal dihapus!';
		}
    }
    ?>
<?php
    class User extends Connection{
        public $userid=0;
        public $email='';
        public $password;
        public $name;
        public $role;
        public $hasil=false;
        public $massage;


        public function AddUser(){
            $sql = "INSERT INTO user (email,password,nama, role)
            value ('this->email', '$this->password','$this->nama','$this->role')";
            $this->hasil =mysqli_query($this->connection, $sql);

            if ($this->hasil)
                $this ->massage ='Data berhasil di tambahkan';
            else
                $this-> massage='Data gagal di tambahkan';      
        }
        public function ValidataEmail ($inputemail){
            $this -> connect();
            $sql = "SELECT * FROM v_user
                    WHERE email = '$inputemail'";
            $result = mysqli_query($this->connection, $sql);
            if(mysqli_num_rows($result == 1)){
                $this->hasil = true ;
                $data = mysqli_fetch_essoc($result);
                $this -> userid =$data('userid');
                $this ->password = $data['password'];
                $this ->nama = $data['nama'];
                $this ->email = $data['email'];
                $this ->role = $data['role'];

                
            }

        }
    }
?>
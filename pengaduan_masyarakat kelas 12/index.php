<?php
    $koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");

    class masyarakat {
        public $nik;
        public $nama;
        public $username;
        public $password;
        public $notelp;

        function __construct($nik,$nama,$username,$password,$notelp)
        {
            $this->nik = $nik;
            $this->nama = $nama;
            $this->username = $username;
            $this->password = $password;
            $this->notelp = $notelp;
        }

        function TampilBiodata()
        {
            $this->nik;
            $this->nama;
            $this->username;
            $this->password;
            $this->notelp;
        }

        function tambah(){
            include "koneksi.php";
            $koneksi->query("INSERT INTO `masyarakat` VALUES ('$this->nik', '$this->nama', '$this->username', '$this->password', '$this->notelp')");
        }

        function hapus(){
            include "koneksi.php";
            $koneksi->query("DELETE FROM `masyarakat` WHERE nik='$this->nik'");
        }

        function update($nama,$data_username,$data_password,$notelp){
            include "koneksi.php";
            $koneksi->query("UPDATE `masyarakat` SET `nama`='$nama',`username`='$data_username',`password`='$data_password',`notelp`='$notelp' WHERE nik='$this->nik'");
        }
    }

    $warga = new masyarakat("4","pepe","pp44","444","0947");
    $warga->tambah();
?>

     
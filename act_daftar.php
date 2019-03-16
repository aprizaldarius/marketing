<?php
include "konek.php";
$id_daftar = $_POST['id_daftar'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jenis_lomba = $_POST['jenis_lomba'];


        $sql = mysqli_query($konek,"INSERT INTO tb_register VALUES (NULL,'$id_daftar','$nama','$email','$no_hp','$jenis_lomba')");
            if($sql){
        	echo "<script>alert ('Pendaftaran peserta berhasil')</script>";
        	echo "<meta http-equiv=Refresh content=0;url=?page=home>";
        }else{
        	echo "<script>alert ('Terjadi kesalahan sistem !')</script>";
        	echo "<meta http-equiv=Refresh content=0;url=?page=register>";
        }
    


?>
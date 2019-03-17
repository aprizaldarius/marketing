<?php
include "konek.php";
//$id_daftar = $_POST['id_daftar'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
//$jenis_lomba = $_POST['jenis_lomba'];
date_default_timezone_set('Asia/Jakarta');
$waktu = date("Y-m-d h:i:s");

$cek = mysqli_query($konek,"SELECT * FROM tb_register WHERE email='$email'");
$data = mysqli_fetch_array($cek);
$mail = $data['email'];

if($mail == $email){
    echo "<script>alert ('Email sudah terdaftar')</script>";
    echo "<meta http-equiv=Refresh content=0;url=index.php?page=register>";
}else{

        $sql = mysqli_query($konek,"INSERT INTO tb_register VALUES (NULL,'$nama','$email','$no_hp','-','talkshow','$waktu')");
            if($sql){
        	echo "<script>alert ('Pendaftaran peserta berhasil')</script>";
        	echo "<meta http-equiv=Refresh content=0;url=index.php?page=register>";
        }else{
        	echo "<script>alert ('Terjadi kesalahan sistem !')</script>";
        	echo "<meta http-equiv=Refresh content=0;url=index.php?page=register>";
        }
    }
    
?>
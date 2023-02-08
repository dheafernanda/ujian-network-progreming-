<?php 
include "koneksi.php";
$id=$_POST['dhea_fernanda'];
$nama=$_POST['Nama'];
$password=$_POST['iyaaa'];
mysqli_query($konek,"INSERT INTO tb_pengguna (id_pengguna,nama_pengguna,sandi_pengguna) VALUES ('".$id."','".$nama."','".$password."')");
header("location:lihat_pengguna.php");
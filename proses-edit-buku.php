<?php

include "koneksi.php";
$Id_buku=$_POST['Id_buku'];
$Judul=$_POST['Judul'];
$Pengarang=$_POST['Pengarang'];
$Penerbit=$_POST['Penerbit'];
$Tahun_terbit=$_POST['Tahun_terbit'];
$Jenis=$_POST['Jenis'];
$Website=$_POST['Website'];
$No_hp=$_POST['No_hp'];

$ubah=$koneksi->query("update tabel_buku set, Judul='$Judul', Pengarang='$Pengarang', Penerbit='$Penerbit', Tahun_terbit='$Tahun_terbit', Jenis='$Jenis', Website='$Website', No_hp='$No_hp', where Id_buku='$Id_buku'");

if($ubah==true){

    header("location:tampil_buku.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>
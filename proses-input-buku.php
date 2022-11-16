<?php

$Id_buku=$_POST['Id_buku'];
$Judul=$_POST['Judul'];
$Pengarang=$_POST['Pengarang'];
$Penerbit=$_POST['Penerbit'];
$Tahun_terbit=$_POST['Tahun_terbit'];
$Jenis=$_POST['Jenis'];
$Website=$_POST['Website'];
$No_hp=$_POST['No_hp'];

include "koneksi1.php";

$simpan=$koneksi1->query("insert into tabel_buku(Id_buku,Judul,Pengarang,Penerbit,Tahun_terbit,Jenis,Website,No_hp) 
                        values('$Id_buku','$Judul','$Pengarang','$Penerbit','$Tahun_terbit','$Jenis','$Website','$No_hp')");

if($simpan==true){

    header("location:tampil_buku.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>
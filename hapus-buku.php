<?php
$id=$_GET['id'];

include "koneksi.php";
$hapus=$koneksi1->query("delete from tabel buku where Id_buku='$id'");

if($hapus==true){

    header("location:tampil_buku.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>
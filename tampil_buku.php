<!doctype html>
<html>
<head>
    <tittle> </tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Data Buku</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
        <td> <center><b> Id buku </center></td> <td> <center><b>Judul </center></td>
        <td><center><b>Pengarang </center></td> <td> <center><b>Penerbit </center></td>
        <td> <center><b>Tahun terbit </center></td> <td> <center><b>Jenis </center></td>
        <td> <center><b>Website </center></td> <td> <center><b>No hp </center></td>
        <th> 
            <a href="input-buku.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi1.php";
   $sql=$koneksi1->query("select * from tabel_buku order by Id_buku ASC");

   while($row= $sql->fetch_assoc()){
   
?>
   <tr>
         <td> <center> <?php echo $row['Id_buku'] ?> </center> </td>
         <td> <center> <?php echo $row['Judul'] ?> </center> </td>
         <td> <center> <?php echo $row['Pengarang'] ?> </center> </td>
         <td> <center> <?php echo $row['Penerbit'] ?> </center> </td>
         <td> <center> <?php echo $row['Tahun_terbit'] ?> </center> </td>
         <td> <center> <?php echo $row['Jenis'] ?> </center> </td>
         <td> <center> <?php echo $row['Website'] ?> </center> </td>
         <td> <center> <?php echo $row['No_hp'] ?> </center> </td>
         <td>
         <a href="edit-buku.php?id=<?php echo $row['id_buku']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus-buku.php?id=<?php echo $row['id_buku']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>
</div> </div></div>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
</body>
</html>
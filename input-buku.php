<!doctype html>
<html>
<head>
        <tittle> </tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-input-buku.php" method="post">
            <div class="form-group">
                <label for="nama"><b>Id buku </b></label>
                <Input type="text" name="Id_buku" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Judul</b></label>
                <Input type="text" name="Judul"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Pengarang</b></label>
                <input type="text" name="Pengarang" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Penerbit</b></label>
                <input type="text" name="Penerbit" class="form-control">
            </div>
            <div class="form-group">
                <label for="Tahun_terbit"><b>Tahun terbit </b></label>
                <Input type="text" name="Tahun_terbit" class="form-control">
            </div>
            <div class="form-group">
                <label for="genre buku"><b>Jenis Buku</b></label>
                <select name="genre buku" class="form-control">
                <option value ="fiksi"> fiksi</option>
                <option value ="sejarah"> sejarah</option>
            </select>
            <div class="form-group">
                <label for="nama"><b>Website</b></label>
                <Input type="text" name="Website" class="form-control">
            </div>
            <div class="form-group">
                <label for="Nama"><b>No hp</b></label>
                <input type="number" name="No_hp" class="form-control">
            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
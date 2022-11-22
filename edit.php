<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header('Location:tampil.php?');
}
$id=$_GET['id'];
$sql= "SELECT * FROM tb_perpus WHERE id=$id";
$query = mysqli_query($db, $sql);
$sefilia_8nov = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)< 1){
    die ("Data tidak ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1>From Edit</h1>
    <form action="proses-edit.php" method="POST">
<form>
    <fieldset>
    <input type="hidden" name="id" value="<?php echo $sefilia_8nov['id']?>" />
    <p>
        <label name="nama">Nama : </label>
        <input type="text" name="nama" value="<?php echo $sefilia_8nov['nama']?>" />
</p>
<p>
<label name="kelas">Kelas : </label>
        <input type="text" name="kelas" value="<?php echo $sefilia_8nov['kelas']?>" />
</p>
<p>
    <label for="jenis_buku">Jenis Buku : </label>
    <p><input type = "radio" name="jenis_buku" value="fiksi" />Fiksi</p>
    <p><input type = "radio" name="jenis_buku" value="nonfiksi" />NonFiksi</p>
    <p><input type = "radio" name="jenis_buku" value="majalah" />Majalah</p>
    <p><input type = "radio" name="jenis_buku" value="komik" />Komik</p>
</p>
<p>
    <input type="submit" name="Kirim data" value="kirim">
</p>
</fieldset>
</form>
</body>
</html>

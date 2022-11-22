<?php
include("koneksi.php");?>

<html>
<head>
    <title>Form Tampil</title>
</head>
<body>
    <header>
        <h1>APLIKASI PEMINJAMAN BUKU</h1>
    </header>
    <p><a href="index.php">Tambah</a></p>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Buku</th>
            <th>Aksi</th>
</tr>
<?php
include ("koneksi.php");
$sql = 'SELECT * FROM tb_perpus';
$query = mysqli_query($db, $sql);


while($tb_perpus = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$tb_perpus['id']."</td>";
    echo "<td>".$tb_perpus['nama']."</td>";
    echo "<td>".$tb_perpus['kelas']."</td>";
    echo "<td>".$tb_perpus['jenis_buku']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$tb_perpus['id']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$tb_perpus['id']."'>Hapus</a> ";
    echo "</td>";
    echo "</tr>";
}
?>
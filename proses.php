<?php
include("koneksi.php");

if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_buku = $_POST['jenis_buku'];

    $sql = "INSERT INTO tb_perpus ( nama, kelas, jenis_buku) VALUES ('$nama', '$kelas', '$jenis_buku')";
    $query = mysqli_query($db, $sql);
}
?>
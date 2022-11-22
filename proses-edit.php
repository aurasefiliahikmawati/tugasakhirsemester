<?php
include("koneksi.php");

if(isset($_POST['kirim'])){
    $id= $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_buku = $_POST['jenis_buku'];

    $sql = "UPDATE tb_perpus SET nama='$nama', kelas='$kelas', jenis_buku='$jenis_buku' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if($query){
    header("Location:tampil.php");
}else{
    die("gagal mengedit");

}  
 }else{
    die("berhasil");
}

?>
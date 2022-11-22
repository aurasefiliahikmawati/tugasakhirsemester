<DOCTYPE html>
    <html>
        <head>
            <title>Form Tambah</title>
</head>
<body>
    <header>
    
<h3> Aplikasi Peminjaman Buku </h3>
</header>

    <form action="proses.php" method="POST">
        
            <fieldset>
<p>
                    <label for = "nama">Nama : </label>
                    <input type = "text" name="nama" />
</p>

<p>
                    <label for = "kelas">Kelas : </label>
                    <input type = "text" name="kelas" />
</p>
<p>
                    <label for = "jenis_buku">Jenis Buku : </label>
                        <p><input type = "radio" name="jenis_buku" value="fiksi" />Fiksi</p>
                        <p><input type = "radio" name="jenis_buku" value="nonfiksi" />NonFiksi</p>
                        <p><input type = "radio" name="jenis_buku" value="majalah" />Majalah</p>
                        <p><input type = "radio" name="jenis_buku" value="komik" />Komik</p>
                        
</p>

<p>
    <input type="submit" value="Kirim" name = "kirim" />
</p>

</fieldset>
</form>
</body>
</html>
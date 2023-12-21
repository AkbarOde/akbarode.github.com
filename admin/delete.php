    <?php

    $data = $_GET['id'];

    //gunakan fungsi di bawah ini agar session bisa dibuat
    session_start();
    
    //koneksi ke database latihan
    require 'connection.php';

    
    //hapus data dari tabel kontak
    $delete = mysqli_query($koneksi, "DELETE from mahasiswa where id=".$data);
    
    //set session sukses
    $_SESSION["hapus"] = 'Data Berhasil Dihapus';
    
    //redirect ke halaman index.php
    header('Location: mahasiswa.php');   

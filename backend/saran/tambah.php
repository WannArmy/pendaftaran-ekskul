<?php
include '../../config/koneksi.php';

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $ekskul = $_POST['ekskul'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = date("Y/m/d h:i:s");
    
    $query = mysqli_query($db, "INSERT INTO saran VALUES('','$nama','$ekskul','$judul','$isi','$tanggal')");
    if($query){
    echo "<script>alert('Daftar Ekskul Berhasil Diupload!'); location.href=('../../frontend/dashboard/jadwal/')</script>";
    }
    else{
        echo "<script>alert('Daftar Ekskul Gagal Diupload!'); location.href=('../../frontend/dashboard/jadwal/')</script>";
    }
}
else{
    header ('../../frontend/dashboard');
}
?>
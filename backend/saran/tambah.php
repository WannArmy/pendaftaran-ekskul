<?php
include '../../config/koneksi.php';

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ekskul = $_POST['ekskul'];
    $pesan = $_POST['pesan'];
    
    $query = mysqli_query($db, "INSERT INTO saran VALUES('','$nama','$kelas','$ekskul','$pesan')");
    echo "<script>alert('Daftar Ekskul Berhasil Diupload!'); location.href=('../../frontend/dashboard/ekskul')</script>";
    }

else{
    header ('../../frontend/dashboard');
}
?>
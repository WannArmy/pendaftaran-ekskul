<?php
include '../../config/koneksi.php';

if(isset($_POST['submit'])){

    $id= $_POST['id'];
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $guru = $_POST['guru'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];

    $query = mysqli_query($db, "UPDATE list_ekskul SET judul='$judul',keterangan='$keterangan',guru='$guru',hari='$hari',jam='$jam' WHERE id=$id");
    echo "<script>alert('Data Ekskul Berhasil Dibah!');location.href=('../../frontend/dashboard/ekskul')</script>";
}
else{
    header ('../../frontend/dashboard');
}
?>
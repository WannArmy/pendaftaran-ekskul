<?php

include("../../config/koneksi.php");

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $ekskul = $_POST['ekskul'];
    $kelas = $_POST['kelas'];
    $tanggal = date("Y/m/d h:i:s");

    $sql = "INSERT INTO minat VALUES ('', '$nama', '$ekskul', '$kelas','$tanggal')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script>alert('Pendaftaran Berhasil');</script>";
        header('Location: ../../frontend/dashboard/');
    } else {
        echo "<script>alert('Pendaftaran Gagal');</script>";
        header('Location: ../../frontend/dashboard/');
    }
}
else{
    echo "<script>alert('Gagal');</script>";
}
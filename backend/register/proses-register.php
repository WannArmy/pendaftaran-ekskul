<?php

include("../../config/koneksi.php");

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $hak_akses = "Murid";

    $sql = "INSERT INTO user (nama,email,nohp,username,password,hak_akses)
    VALUES ('$nama', '$email', '$nohp', '$username', '$password', '$hak_akses')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['pesan'] = "Register Berhasil";
        header('Location: ../../frontend/login/index.php');
    } else {
        $_SESSION['pesan'] = "Register Gagal";
        header('Location: ../../frontend/register/index.php');

    }
}

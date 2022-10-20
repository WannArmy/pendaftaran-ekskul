<?php
session_start();
include("../../config/koneksi.php");

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $hak_akses = "Murid";

    $sql = "INSERT INTO user (nama,email,username,password,hak_akses)
    VALUES ('$nama', '$email', '$username', '$password', '$hak_akses')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script>alert('Register Berhasil, Silahkan Login Kembali')</script>";
        header('Location: ../../frontend/login/index.php');
    } else {
        header('Location: ../../frontend/login/index.php');
        $_SESSION['pesan'] = "Gagal register X";
    }
}

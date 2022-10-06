<?php

include("../../config/koneksi.php");

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $akses = $_POST['akses'];

    $sql = "INSERT INTO user (nama,email,username,password,akses)
    VALUES ('$nama', '$email', '$username', '$password', '$akses')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../../frontend/register/index.php');
    } else {
        header('Location: ../../frontend/register/index.php');
        $_SESSION['pesan'] = "Gagal menghapus X";
    }
}

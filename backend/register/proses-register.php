<?php

include("../../config/koneksi.php");

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hak_akses = "Murid";

    $sql = "INSERT INTO user (nama,email,username,password,hak_akses)
    VALUES ('$nama', '$email', '$username', '$password', '$hak_akses')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../../frontend/register/index.php');
    } else {
        header('Location: ../../frontend/register/index.php');
        $_SESSION['pesan'] = "Gagal register X";
    }
}

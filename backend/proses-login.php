<?php
session_start();
include "../config/koneksi.php";
if(isset($_POST['submit']))
$username=$_POST['username'];
$password=md5($_POST['password']);
$query = mysqli_query($db,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$check = mysqli_num_rows($query);

if($check > 0){
    $query = mysqli_query($db,"SELECT * FROM user WHERE username='$username' AND password='$password'");
    while($rows = mysqli_fetch_array($query)){
        $hak = $rows['hak_akses'];
        $id = $rows['id'];
        $nama = $rows['nama'];
    };
    $_SESSION['id']=$id;
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['hak_akses']=$hak;
    $_SESSION['nama']=$nama;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (1 * 7200);

    if($hak == 'Murid'){
        echo "<script>alert('Selamat datang, ".$nama."');location.href=('../frontend/')</script>";
    }
    else{
        echo "<script>alert('Selamat datang, ".$nama."');location.href=('../frontend/dashboard/')</script>";
    }
}
else{
    echo "<script>alert('Login Gagal, Silahkan Coba Lagi'); location.href=('../frontend/login/');</script>";
}
?>
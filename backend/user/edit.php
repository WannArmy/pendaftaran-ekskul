<?php
include '../../config/koneksi.php';

if(isset($_POST['submit'])){

    $id= $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $hak_akses = $_POST['hak_akses'];

    $query = mysqli_query($db, "UPDATE user SET nama='$nama',username='$username',email='$email',nohp='$nohp',hak_akses='$hak_akses' WHERE id=$id");
    echo "<script>alert('Daftar User Berhasil Dibah!');location.href=('../../frontend/dashboard/user')</script>";
}
else{
    header ('../../frontend/dashboard');
}
?>
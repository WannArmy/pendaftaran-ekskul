<?php
include '../../config/koneksi.php';

if(isset($_POST['submit'])){

    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $guru = $_POST['guru'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $gambar = $_POST['gambar'];

    $namagambar = $_FILES['gambar']['name'];
    $tipegambar = $_FILES['gambar']['type'];
    $tmpgambar = $_FILES['gambar']['tmp_name'];
    $lokgambar = '../../frontend/assets/images/tmp/';
    
    $query = mysqli_query($db, "SELECT * FROM list_ekskul");
    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_array($query)){
            $nmgambar = $row['gambar'];
        }
    }
    if($nmgambar == $namagambar){
        echo "<script>alert('Nama Gambar sudah dipakai, ubah gambar terlebih dahulu'); location.href=('../../frontend/dashboard/ekskul/tambah-ekskul.php')</script>";
    }
    else{

    if(is_uploaded_file($tmpgambar)){
        if(move_uploaded_file($tmpgambar, $lokgambar.$namagambar)){
            $query = mysqli_query($db, "INSERT INTO list_ekskul VALUES('','$judul','$keterangan','$guru','$hari','$jam','$namagambar')");
            if($query){
                echo "<script>alert('Data Ekskul Berhasil Diupload!');location.href=('../../frontend/dashboard/ekskul')</script>";
            }
        }
        else{
            echo "<script>alert('gambar gagal dipindah'); location.href=('../../frontend/dashboard/ekskul')</script>";
        }
    }
    else{

    $query = mysqli_query($db, "INSERT INTO list_ekskul VALUES('','$judul','$keterangan','$guru','$hari','$jam','')");
    echo "<script>alert('Data Ekskul Berhasil Diupload!'); location.href=('../../frontend/dashboard/ekskul')</script>";
    }
}
}
else{
    header ('../../frontend/dashboard');
}
?>
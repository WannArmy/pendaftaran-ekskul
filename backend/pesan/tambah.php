<?php
include '../../config/koneksi.php';

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $ekskul = $_POST['ekskul'];
    $pesan = $_POST['pesan'];
    $tanggal = date("Y/m/d h:i:s");
    
    $query = mysqli_query($db, "INSERT INTO pesan VALUES('','$ekskul','$pesan','$nama','$tanggal')");
    if($query){
    echo "<script>alert('Pesan Berhasil Diupload!'); location.href=('../../frontend/dashboard/')</script>";
    }
    else{
        echo "<script>alert('Pesan Gagal Diupload!'); location.href=('../../frontend/dashboard/')</script>";
    }
}
else{
    header ('../../frontend/dashboard');
}
?>
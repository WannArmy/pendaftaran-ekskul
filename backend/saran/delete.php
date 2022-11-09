<?php
include '../../config/koneksi.php';
if(isset($_GET['id'])){

    $id= $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM saran WHERE id=$id");
if($query){
    while($row = mysqli_fetch_array($query)){
        $nama = $row['nama'];
        $ekskul = $row['ekskul'];
        $judul = $row['judul'];
        $isi = $row['isi'];
        $tanggal_post = $row['tanggal'];
        $tanggal_hapus = date("Y/m/d h:i:s");
    }
    $query = mysqli_query($db, "INSERT INTO historysaran(id, nama, ekskul, judul, isi, tanggal_post, tanggal_hapus) VALUES('','$nama','$ekskul','$judul','$isi','$tanggal_post','$tanggal_hapus')");
if($query){
    $query = mysqli_query($db, "DELETE FROM saran WHERE id=$id");
    if($query){
        echo "<script>alert('Data Berhasil Dihapus');location.href=('../../frontend/dashboard/list_saran/')</script>";
    }
    else{
        echo "<script>alert('Data Gagal Dihapus');location.href=('../../frontend/dashboard/list_saran/')</script>";
    }
}   
else{
    // echo "<script>alert('Data Gagal Dihapus 2');location.href=('../../frontend/dashboard/list_saran/')</script>";
} 
}
}
else{
    echo "<script>location.href=('../../frontend/');</script>";
}
?>
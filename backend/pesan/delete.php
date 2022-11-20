<?php
include '../../config/koneksi.php';
if(isset($_GET['id'])){

    $id= $_GET['id'];

    $query = mysqli_query($db, "DELETE FROM pesan WHERE id=$id");
    if($query){
        echo "<script>alert('Pesan Berhasil Dihapus');location.href=('../../frontend/dashboard/list_pesan/')</script>";
    }
    else{
        echo "<script>alert('Pesan Gagal Dihapus');location.href=('../../frontend/dashboard/list_pesan/')</script>";
    }
}
    
else{
    echo "<script>location.href=('../../frontend/');</script>";
}
?>
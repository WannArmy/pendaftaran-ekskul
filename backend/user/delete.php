<?php
include '../../config/koneksi.php';
if(isset($_GET['id'])){

    $id= $_GET['id'];

    $query = mysqli_query($db, "DELETE FROM user WHERE id=$id");
if($query){
echo "<script>alert('Data Berhasil Dihapus');location.href=('../../frontend/dashboard/user')</script>";
}
else{
    echo "<script>alert('Data Gagal Dihapus');location.href=('../../frontend/dashboard/user')</script>";
}
}
?>
<?php
include '../../config/koneksi.php';
if(isset($_GET['id'])){

    $id= $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE id=$id");
    while($row = mysqli_fetch_array($query)){
    unlink("../../frontend/assets/images/tmp/".$row['gambar']);
    }

    $query = mysqli_query($db, "DELETE FROM list_ekskul WHERE id=$id");
if($query){
echo "<script>alert('Data Berhasil Dihapus');location.href=('../../frontend/dashboard/ekskul')</script>";
}
else{
    echo "<script>alert('Data Gagal Dihapus');location.href=('../../frontend/dashboard/ekskul')</script>";
}
}
?>
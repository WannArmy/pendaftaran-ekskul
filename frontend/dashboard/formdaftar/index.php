<?php 
include "../luar.php";
$nama = $_SESSION['nama'];
$query = mysqli_query($db, "SELECT COUNT(id) AS jmlh FROM minat WHERE siswa='$nama'");
if(mysqli_num_rows($query)){
while($row = mysqli_fetch_array($query)){
    $jmlh = $row['jmlh'];
}
if($jmlh > 1){
    echo "<script>alert('Anda sudah memilih 2 ekskul!');location.href=('../');</script>";
}

else{
?>

<div class="row">
    <div class="card col-11" style="margin-left:3em;margin-top:1em;">
        <div class="d-flex align-items-end">
            <div class="col-12">
                <div class="card-header">
                    <h2>Form Pendaftaran</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="../../../backend/siswa/tambah.php">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?= $_SESSION['nama'] ?>" readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Pilih Ekstrakurikuler</label>
                            <select class="form-select" name="ekskul" required>
                                <?php
                                $query = mysqli_query($db, "SELECT * FROM list_ekskul ORDER BY judul ASC");
                                if(mysqli_num_rows($query) > 0){
                                    while($row = mysqli_fetch_array($query)){
                                        $nama = $_SESSION['nama'];
                                $sql = mysqli_query($db,"SELECT * FROM minat WHERE siswa = '$nama'");
                                if(mysqli_num_rows($query) > 0){
                                    while($rows = mysqli_fetch_array($sql)){
                                     $nama2 = $rows['ekskul'];   
                                    }
                                    if($nama2 != $row['judul']){
                                    echo "<option value='".$row['judul']."'>".$row['judul']."</option>";
                                    }
                                }
                                else{
                                    echo "<option value='".$row['judul']."' disabled>".$row['judul']."</option>";
                                }
                                    }
                                }
                                ?>
                            </select>
                            <?= $nama2, $row['judul'], $rows['ekskul'] ?> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Kelas</label> 
                            <select name="kelas" id="" class="form-select" required>
                                <option value="X">X</option>
                                <option value="X">XI</option>
                                <option value="X">XII</option>
                            </select>
                        </div>
                        <br>
                        <label for="" style="font-size:large;">Pesan: Ekskul hanya bisa dipilih 2 kali dan form ini <span style="color:red;">TIDAK BISA DIUBAH</span>. Jika ingin mengubah form ini, maka hubungi guru pembimbingnya.</label>
                        <br><br>
                        <input type="radio" name="setuju" class="form-check-input" required>
                        <label for="">Saya sudah membaca pesan diatas dan Setuju dengan pernyataan diatas.</label>
                        <br><br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
include "../footer.php";
?>
<?php include "../luar.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE id=$id");
while($row = mysqli_fetch_array($query)){
?>
<div class="row">
    <div class="card col-11" style="margin-left:3em;margin-top:1em;">
        <div class="d-flex align-items-end">
            <div class="col-12">
                <div class="card-header">
                    <h2>Edit Ekskul</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="../../../backend/ekskul/edit.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <div class="form-group">
                            <label for="">Nama Ekskul</label>
                            <input type="text" class="form-control" name="judul" value="<?= $row['judul']; ?>"
                                maxlength=25 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Keterangan Ekskul</label>
                            <input type="text" class="form-control" name="keterangan" value="<?= $row['keterangan']; ?>"
                                maxlength=255>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Nama Guru</label>
                            <?php
              if($_SESSION['hak_akses'] == "guru"){
              ?>

                            <input type="text" class="form-control" name="guru" value="<?= $row['guru']; ?>" readonly
                                required>

                            <?php
              }
              else{
                ?>
                            <select class="form-select" name="guru" id="">
                                <?php
                  $query = mysqli_query($db, "SELECT * FROM user WHERE hak_akses='guru'");
                  while($rows = mysqli_fetch_array($query)){
                    ?>
                                <option value="<?= $rows['nama']?>" <?php if($rows['nama'] == $row['guru']){?> selected <?php } ?>><?= $rows['nama'] ?></option>
                                <?php
                  }
                  ?>
                            </select>
                            <?php
              }
              ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Hari</label>
                            <select name="hari" class="form-select" id="" required>
                                <option value="senin" <?php if($row['hari'] == "senin"){echo "selected";} ?>>Senin</option>
                                <option value="selasa" <?php if($row['hari'] == "selasa"){echo "selected";} ?>>Selasa</option>
                                <option value="rabu" <?php if($row['hari'] == "rabu"){echo "selected";} ?>>Rabu</option>
                                <option value="kamis" <?php if($row['hari'] == "kamis"){echo "selected";} ?>>Kamis</option>
                                <option value="jumat" <?php if($row['hari'] == "jumat"){echo "selected";} ?>>Jumat</option>
                                <option value="sabtu" <?php if($row['hari'] == "sabtu"){echo "selected";} ?>>Sabtu</option>
                                <option value="minggu" <?php if($row['hari'] == "minggu"){echo "selected";} ?>>Minggu</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jam</label>
                            <input type="time" class="form-control" name="jam" value="<?= $row['jam'] ?>" reuqired>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <br>
                            <img src="../../assets/images/tmp/<?= $row['gambar']; ?>" alt="Tidak Ada Gambar">
                            <br><br>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
include "../footer.php";
}
else{
    echo "<script>alert('Mau edit apa?');location.href=('/')</script>";
}
?>
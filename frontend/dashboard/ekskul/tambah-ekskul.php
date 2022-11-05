<?php include "../luar.php" ?>

<div class="row">
    <div class="card col-11" style="margin-left:3em;margin-top:1em;">
        <div class="d-flex align-items-end">
            <div class="col-12">
                <div class="card-header">
                    <h2>Tambah Ekskul</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="../../../backend/ekskul/tambah.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama Ekskul</label>
                            <input type="text" class="form-control" name="judul" maxlength=25 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Keterangan Ekskul</label>
                            <input type="text" class="form-control" name="keterangan" maxlength=255>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Nama Guru</label>
                            <?php
              if($_SESSION['hak_akses'] == "Guru"){
              ?>

                        <input type="text" class="form-control" name="guru" value="<?php 
              $username = $_SESSION['username'];
              $query = mysqli_query($db, "SELECT * FROM user WHERE username='$username'");
              while($row = mysqli_fetch_array($query)){
                echo $row['nama'];
              }
               ?>
              " readonly required>

                        <?php
              }
              else{
                ?>
                        <select class="form-select" name="guru" id="" required>
                          <?php
                  $query = mysqli_query($db, "SELECT * FROM user WHERE hak_akses='guru'");
                  while($row = mysqli_fetch_array($query)){
                    ?>
                          <option value="<?= $row['nama'] ?>"><?= $row['nama'] ?></option>
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
                          <option value="senin">Senin</option>
                          <option value="selasa">Selasa</option>
                          <option value="rabu">Rabu</option>
                          <option value="kamis">Kamis</option>
                          <option value="jumat">Jumat</option>
                          <option value="sabtu">Sabtu</option>
                          <option value="minggu">Minggu</option>
                        </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jam</label>
                            <input type="time" class="form-control" name="jam" reuqired>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Gambar <sub>Tidak bisa diedit</sub></label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>
                        <br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../footer.php" ?>
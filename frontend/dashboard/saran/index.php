<?php include "../luar.php" ?>

<div class="row">
    <div class="card col-11" style="margin-left:3em;margin-top:1em;">
        <div class="d-flex align-items-end">
            <div class="col-12">
                <div class="card-header">
                    <h2>Form Saran</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="../../../backend/saran/tambah.php">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?= $_SESSION['nama'] ?>" readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Pilih Ekstrakurikuler</label>
                            <select class="form-select" name="ekskul">
                                <?php
                                $query = mysqli_query($db, "SELECT * FROM list_ekskul ORDER BY judul ASC");
                                if(mysqli_num_rows($query) > 0){
                                    while($row = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?= $row['judul'] ?>"><?= $row['judul'] ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="judul" class="form-control" cols="30" rows="7">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Saran</label>
                            <textarea name="isi" class="form-control" cols="30" rows="7"></textarea>
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
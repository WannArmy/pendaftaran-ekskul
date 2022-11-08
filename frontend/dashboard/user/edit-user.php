<?php
include "../luar.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM user WHERE id=$id");
while($row = mysqli_fetch_array($query)){
?>

<div class="row">
    <div class="card col-11" style="margin-left:3em;margin-top:1em;">
        <div class="d-flex align-items-end">
            <div class="col-12">
                <div class="card-header">
                    <h2>Edit User</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="../../../backend/user/edit.php">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" maxlength=50 value="<?= $row['nama'] ?>" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $row['username'] ?>" maxlength=25>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $row['email'] ?>" maxlength=70>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">No.Hp</label>
                            <input type="number" class="form-control" name="nohp" value="<?= $row['nohp'] ?>" maxlength=13>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Hak Akses</label>
                            <select name="hak_akses" id="" class="form-select">
                                <option value="Murid" <?php if($row['hak_akses'] == "Murid"){ echo "selected"; }; ?>>Murid</option>
                                <option value="Guru" <?php if($row['hak_akses'] == "Guru"){ echo "selected"; }; ?>>Guru</option>
                                <option value="Admin" <?php if($row['hak_akses'] == "Admin"){ echo "selected"; }; ?>>Admin</option>
                            </select>
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
}
include "../footer.php";
?>
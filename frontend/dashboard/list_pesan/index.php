<?php
include '../luar.php';
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card" style="margin-top:50px;">
        <div class="card-header" style="border-bottom:black solid 1px;">Daftar Pesan<br>
        </div>
        <div class="card-body" style="margin-top:1em;">
          <!-- <div class="table-responsive" style="margin-top:3em;"> -->
            <table id="table" class="display">
              <thead>
                <tr>
                  <th>No</th>
                  <?php
                  if($_SESSION['hak_akses'] == "Admin"){
                  echo "<th>Nama</th>";
                  }
                  ?>
                  <th>Ekskul</th>
                  <th>Pesan</th>
                  <th>Tanggal</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
<?php
if($_SESSION['hak_akses'] == "Admin"){
$query = mysqli_query($db, "SELECT  * FROM pesan");
}
else{
    $nama = $_SESSION['nama'];
    $query = mysqli_query($db, "SELECT  * FROM pesan WHERE nama = '$nama'");
}
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
  ?>
  <tr>
  <td><?= $no++ ?></td>
  <?php
  if($_SESSION['hak_akses'] == "Admin"){
  ?>
  <td><?= $row['nama']; ?></td>
  <?php
  }
  ?>
  <td><?= $row['ekskul']; ?></td>
  <td><?= $row['pesan']; ?></td>
  <td><?= $row['tanggal']; ?></td>
  <td>
  <a onclick="if(confirm('Yakin Ingin Menghapus Data Ini?') == true){ location.href = '../../../backend/pesan/delete.php?id=<?= $row['id']; ?>';}else{alert('Proses hapus gagal');}" class="btn btn-outline-danger">
        Delete
    </a>
    </td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=9 style="text-align:center;"> Data Masih Kosong, Belum ada murid yang protes wkwkkwkw</td>
  <?php
}
?>
              </tbody>
            </table>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>


  <!-- / Content -->

  <?php
  include '../footer.php';
  ?>
<?php
include '../luar.php';
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card" style="margin-top:50px;">
        <div class="card-header" style="border-bottom:black solid 1px;">Jadwal Ekskul<br>
        </div>
        <div class="card-body" style="margin-top:1em;">
          <!-- <div class="table-responsive" style="margin-top:3em;"> -->
            <br><br><h3 style="text-align:center;">Senin</h3>
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col">No</th>
                  <th scope="col">Ekskul</th>
                  <th scope="col">Guru Pembimbing</th>
                  <th scope="col">Jam</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE hari='senin'");
$no = 1;
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    $nama = $_SESSION['nama'];
    $ekskul = $row['judul'];
    $query2 = mysqli_query($db, "SELECT * FROM minat WHERE siswa='$nama' AND ekskul='$ekskul'");
    while($row2 = mysqli_fetch_array($query2)){
      $ekskul2 = $row2['ekskul'];
      if($ekskul == $ekskul2){
        ?>
          <tr style="background-color:grey;color:white;">
        <?php
      }
      else{
        echo "<tr>";
      }
    }
  ?>
  <td><?= $no++ ?></td>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['guru']; ?></td>
  <td style="text-transform:capitalize;"><?= $row['hari']; ?>, <?= $row['jam']; ?></td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=9 style="text-align:center;"> Data Masih Kosong, Belum ada ekskul di hari ini</td>
  <?php
}
?>
              </tbody>
            </table>
            <br>
            <br><br><h3 style="text-align:center;">Selasa</h3>
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col">No</th>
                  <th scope="col">Ekskul</th>
                  <th scope="col">Guru Pembimbing</th>
                  <th scope="col">Jam</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE hari='selasa'");
$no = 1;
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    $nama = $_SESSION['nama'];
    $ekskul = $row['judul'];
    $query2 = mysqli_query($db, "SELECT * FROM minat WHERE siswa='$nama' AND ekskul='$ekskul'");
    while($row2 = mysqli_fetch_array($query2)){
      $ekskul2 = $row2['ekskul'];
      if($ekskul == $ekskul2){
        ?>
          <tr style="background-color:grey;color:white;">
        <?php
      }
      else{
        echo "<tr>";
      }
    }
  ?>  <td><?= $no++ ?></td>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['guru']; ?></td>
  <td style="text-transform:capitalize;"><?= $row['hari']; ?>, <?= $row['jam']; ?></td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=9 style="text-align:center;"> Data Masih Kosong, Belum ada ekskul di hari ini</td>
  <?php
}
?>
              </tbody>
            </table>
            <br>
          <!-- </div> -->
          <br><br><h3 style="text-align:center;">Rabu</h3>
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col">No</th>
                  <th scope="col">Ekskul</th>
                  <th scope="col">Guru Pembimbing</th>
                  <th scope="col">Jam</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE hari='rabu'");
$no = 1;
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    $nama = $_SESSION['nama'];
    $ekskul = $row['judul'];
    $query2 = mysqli_query($db, "SELECT * FROM minat WHERE siswa='$nama' AND ekskul='$ekskul'");
    while($row2 = mysqli_fetch_array($query2)){
      $ekskul2 = $row2['ekskul'];
      if($ekskul == $ekskul2){
        ?>
          <tr style="background-color:grey;color:white;">
        <?php
      }
      else{
        echo "<tr>";
      }
    }
  ?>  <td><?= $no++ ?></td>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['guru']; ?></td>
  <td style="text-transform:capitalize;"><?= $row['hari']; ?>, <?= $row['jam']; ?></td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=9 style="text-align:center;"> Data Masih Kosong, Belum ada ekskul di hari ini</td>
  <?php
}
?>
              </tbody>
            </table>
            <br>
            <br><br><h3 style="text-align:center;">Kamis</h3>
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col">No</th>
                  <th scope="col">Ekskul</th>
                  <th scope="col">Guru Pembimbing</th>
                  <th scope="col">Jam</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE hari='kamis'");
$no = 1;
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    $nama = $_SESSION['nama'];
    $ekskul = $row['judul'];
    $query2 = mysqli_query($db, "SELECT * FROM minat WHERE siswa='$nama' AND ekskul='$ekskul'");
    while($row2 = mysqli_fetch_array($query2)){
      $ekskul2 = $row2['ekskul'];
      if($ekskul == $ekskul2){
        ?>
          <tr style="background-color:grey;color:white;">
        <?php
      }
      else{
        echo "<tr>";
        var_dump($ekskul);
        var_dump($ekskul2);
      }
    }
  ?>  <td><?= $no++ ?></td>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['guru']; ?></td>
  <td style="text-transform:capitalize;"><?= $row['hari']; ?>, <?= $row['jam']; ?></td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=9 style="text-align:center;"> Data Masih Kosong, Belum ada ekskul di hari ini</td>
  <?php
}
?>
              </tbody>
            </table>
            <br>
            <br><br><h3 style="text-align:center;">Jumat</h3>
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col">No</th>
                  <th scope="col">Ekskul</th>
                  <th scope="col">Guru Pembimbing</th>
                  <th scope="col">Jam</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE hari='jumat'");
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    $nama = $_SESSION['nama'];
    $ekskul = $row['judul'];
    $query2 = mysqli_query($db, "SELECT * FROM minat WHERE siswa='$nama' AND ekskul='$ekskul'");
    while($row2 = mysqli_fetch_array($query2)){
      $ekskul2 = $row2['ekskul'];
      if($ekskul == $ekskul2){
        ?>
          <tr style="background-color:grey;color:white;">
        <?php
      }
      else{
        echo "<tr>";
      }
    }
  ?>  <td><?= $no++ ?></td>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['guru']; ?></td>
  <td style="text-transform:capitalize;"><?= $row['hari']; ?>, <?= $row['jam']; ?></td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=9 style="text-align:center;"> Data Masih Kosong, Belum ada ekskul di hari ini</td>
  <?php
}
?>
              </tbody>
            </table>
            <br>
            <br><br><h3 style="text-align:center;">Sabtu</h3>
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col">No</th>
                  <th scope="col">Ekskul</th>
                  <th scope="col">Guru Pembimbing</th>
                  <th scope="col">Jam</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE hari='sabtu'");
$no = 1;
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    $nama = $_SESSION['nama'];
    $ekskul = $row['judul'];
    $query2 = mysqli_query($db, "SELECT * FROM minat WHERE siswa='$nama' AND ekskul='$ekskul'");
    while($row2 = mysqli_fetch_array($query2)){
      $ekskul2 = $row2['ekskul'];
      if($ekskul == $ekskul2){
        ?>
          <tr style="background-color:grey;color:white;">
        <?php
      }
      else{
        echo "<tr>";
      }
    }
  ?>  <td><?= $no++ ?></td>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['guru']; ?></td>
  <td style="text-transform:capitalize;"><?= $row['hari']; ?>, <?= $row['jam']; ?></td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=9 style="text-align:center;"> Data Masih Kosong, Belum ada ekskul di hari ini</td>
  <?php
}
?>
              </tbody>
            </table>
            <br>
            <br><br><h3 style="text-align:center;">Minggu</h3>
            <table class="table" style="text-align:center;">
              <thead>
                <tr>
                <th scope="col">No</th>
                  <th scope="col">Ekskul</th>
                  <th scope="col">Guru Pembimbing</th>
                  <th scope="col">Jam</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE hari='minggu'");
$no = 1;
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    $nama = $_SESSION['nama'];
    $ekskul = $row['judul'];
    $query2 = mysqli_query($db, "SELECT * FROM minat WHERE siswa='$nama' AND ekskul='$ekskul'");
    while($row2 = mysqli_fetch_array($query2)){
      $ekskul2 = $row2['ekskul'];
      if($ekskul == $ekskul2){
        ?>
          <tr style="background-color:grey;color:white;">
        <?php
      }
      else{
        echo "<tr>";
      }
    }
  ?>  <td><?= $no++ ?></td>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['guru']; ?></td>
  <td style="text-transform:capitalize;"><?= $row['hari']; ?>, <?= $row['jam']; ?></td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=9 style="text-align:center;"> Data Masih Kosong, Belum ada ekskul di hari ini</td>
  <?php
}
?>
              </tbody>
            </table>
            <br>
        </div>
      </div>
    </div>
  </div>


  <!-- / Content -->

  <?php
  include '../footer.php';
  ?>
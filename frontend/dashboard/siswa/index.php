<?php
include '../luar.php';
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card" style="margin-top:50px;">
        <div class="card-header" style="border-bottom:black solid 1px;">Daftar Siswa<br>
        </div>
        <div class="card-body" style="margin-top:1em;">
          <!-- <div class="table-responsive" style="margin-top:3em;"> -->
            <table id="table" class="display">
              <thead>
                <tr>
                    <th>No</th>
                  <th>Nama (Siswa)</th>
                  <th>Ekskul</th>
                  <?php
                  if($_SESSION['hak_akses'] == "Admin"){
                    echo "<th>Guru</th>";
                  }
                  ?>
                  <th>Kelas</th>
                  <th>No.Hp (Siswa)</th>
                  <th>Email (Siswa)</th>
                  <th>Tanggal</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
<?php

if($_SESSION['hak_akses'] == "Admin"){
  $nama = $_SESSION['nama'];
  $query = mysqli_query($db, "SELECT l.guru, u.nama, l.judul, m.ekskul, m.kelas, u.nohp, u.email, m.siswa, m.tanggal FROM list_ekskul AS l INNER JOIN user AS u ON l.guru = u.nama INNER JOIN minat AS m ON l.judul = m.ekskul ORDER BY u.nama");
if(mysqli_num_rows($query) > 0){
while($row = mysqli_fetch_assoc($query)){
?>
<tr>
  <td><?= $no++;?></td>
<td><?= $row['siswa']; ?></td>
<td><?= $row['ekskul']; ?></td>
<?php
  $ekskul = $row['ekskul'];
  $query2 = mysqli_query($db, "SELECT * FROM list_ekskul WHERE judul = '$ekskul'");
  if($query2){
      while($row2 = mysqli_fetch_array($query2)){
          echo "<td>".$row2['guru']."</td>";
      }
  }
  else{
      echo "Null";
  }
?>
<td><?= $row['kelas']; ?></td>
<?php
$siswa = $row['siswa'];
$query3 = mysqli_query($db, "SELECT * FROM user WHERE nama = '$siswa'");

if($query3){
  while($row2 = mysqli_fetch_array($query3)){
?>
<td><?= $row2['nohp']; ?></td>
<td><?= $row2['email']; ?></td>
<?php
  }
}
?>
<td><?= $row['tanggal']; ?></td>
<td>
<a onclick="if(confirm('Yakin Ingin Menghapus Data Ini?') == true){ location.href = '../../../backend/saran/delete.php?id=<?= $row['id']; ?>';}else{alert('Proses hapus gagal');}" class="btn btn-outline-danger">
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
</tr>
<?php
}
  }
    else{
    $nama = $_SESSION['nama'];
    $query = mysqli_query($db, "SELECT l.guru, u.nama, l.judul, m.ekskul, m.kelas, u.nohp, u.email, m.siswa, m.tanggal FROM list_ekskul AS l INNER JOIN user AS u ON l.guru = u.nama INNER JOIN minat AS m ON l.judul = m.ekskul WHERE l.guru = '$nama' ORDER BY u.nama");
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_assoc($query)){
  ?>
  <tr>
    <td><?= $no++;?></td>
  <td><?= $row['siswa']; ?></td>
  <td><?= $row['ekskul']; ?></td>
  <td><?= $row['kelas']; ?></td>
  <?php
$siswa = $row['siswa'];
$query3 = mysqli_query($db, "SELECT * FROM user WHERE nama = '$siswa'");

if($query3){
  while($row2 = mysqli_fetch_array($query3)){
?>
<td><?= $row2['nohp']; ?></td>
<td><?= $row2['email']; ?></td>
<?php
  }
}
?>
  <td><?= $row['tanggal']; ?></td>
  <td>
  <a onclick="if(confirm('Yakin Ingin Menghapus Data Ini?') == true){ location.href = '../../../backend/saran/delete.php?id=<?= $row['id']; ?>';}else{alert('Proses hapus gagal');}" class="btn btn-outline-danger">
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
</tr>
  <?php
}
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
<?php
include '../luar.php';
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card" style="margin-top:50px;">
        <div class="card-header" style="border-bottom:black solid 1px;">Daftar Saran<br>
        </div>
        <div class="card-body" style="margin-top:1em;">
          <!-- <div class="table-responsive" style="margin-top:3em;"> -->
            <table id="table" class="display">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Ekskul</th>
                  <th>Guru Pembimbing</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Tanggal</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
<?php
if($_SESSION['hak_akses'] == "Admin"){
$query = mysqli_query($db, "SELECT  s.id, s.nama, s.ekskul, l.guru, l.judul, s.judul, s.isi, s.tanggal FROM saran AS s LEFT JOIN list_ekskul AS l ON s.ekskul = l.judul");
}
else{
    $nama = $_SESSION['nama'];
    $query = mysqli_query($db, "SELECT  s.id, s.nama, s.ekskul, l.guru, l.judul, s.judul, s.isi, s.tanggal FROM saran AS s LEFT JOIN list_ekskul AS l ON s.ekskul = l.judul WHERE l.guru = '$nama'");
}
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
  ?>
  <tr>
  <td><?= $no++ ?></td>
  <td><?= $row['nama']; ?></td>
  <td><?= $row['ekskul']; ?></td>
  <td><?= $row['guru']; ?></td>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['isi']; ?></td>
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
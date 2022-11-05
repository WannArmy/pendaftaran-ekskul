<?php
include '../luar.php';
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card" style="margin-top:50px;">
        <div class="card-header" style="border-bottom:black solid 1px;">Data Ekskul<br>
        </div>
        <div class="card-body" style="margin-top:1em;">
          <span style="float:right;"><a href="tambah-ekskul.php">
              <button class="btn btn-outline-success">Tambah Ekskul</button>
            </a>
          </span>
          <div class="table-responsive" style="margin-top:3em;">
            <table class="table" style="text-align: center;">
              <thead class="table-primary">
                <tr>
                  <th scope="col">Ekskul</th>
                  <th scope="col">Jadwal</th>
                  <th scope="col">Guru Pembimbing</th>
                  <th scope="col">Keterangan Ekskul</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
<?php
$query = mysqli_query($db, "SELECT * FROM list_ekskul");
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
  ?>
  <tr>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['hari']; ?>, <?= $row['jam']; ?></td>
  <td><?= $row['guru']; ?></td>
  <td><?= $row['keterangan']; ?></td>
  <td><img src="../../assets/images/tmp/<?= $row['gambar']; ?>" alt="Tidak Ada Gambar" width=200em height=200em></td>
  <td><a href="edit-ekskul.php?id=<?= $row['id']; ?>" class="btn btn-outline-warning">Edit</a></td>
  <td>
  <a onclick="if(confirm('Yakin Ingin Menghapus Data Ini?') == true){
            location.href = '../../../backend/ekskul/delete.php?id=<?= $row['id']; ?>';
        }
        else{
            alert('Proses hapus gagal');
        }" class="btn btn-outline-danger">
        Delete
    </a>
    </td>
  </tr>
  <?php
  }
}
else{
  ?>
  <td colspan=6> Data Masih Kosong, Mulai Isi Daftar Ekskul di Kanan Atas</td>
  <?php
}
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- / Content -->

  <?php
  include '../footer.php';
  ?>
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
          <span class="float-right" style="float:right;"><a href="tambah.php">
              <button class="btn btn-outline-success">Tambah Ekskul</button>
            </a>
          </span>
          <div class="table-responsive" style="margin-top:2em;">
            <table class="table" style="text-align: center;">
              <thead class="table-primary">
                <tr>
                  <th scope="col">Ekskul</th>
                  <th scope="col">Jadwal</th>
                  <th scope="col">Guru Pembimbing</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>

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
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
          <span class="float-right" style="margin-left:49em;"><a href="{{ route('food.create') }}">
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


  <!-- Footer -->
  <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
        © Cinta Kasih Tzu Chi
        <script>
          document.write(new Date().getFullYear());
        </script>
        , made with ❤️ by
        <a href="#" target="_blank" class="footer-link fw-bolder">XII RPL 1</a>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../../assets/assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../../assets/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../../assets/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../../assets/assets/js/main.js"></script>

<!-- Page JS -->
<script src="../../assets/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
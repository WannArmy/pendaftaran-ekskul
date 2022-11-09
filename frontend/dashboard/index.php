<?php
session_start();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Ekstrakurikuler | SMK CINTA KASIH TZU CHI</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/images/logo-cktc.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../assets/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img width="58" src="../assets/images/logo-cktc.png">
              <defs>
                <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
              </defs>
              <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                  <g id="Icon" transform="translate(27.000000, 15.000000)">
                    <g id="Mask" transform="translate(0.000000, 8.000000)">
                      <mask id="mask-2" fill="white">
                        <use xlink:href="#path-1"></use>
                      </mask>
                      <use fill="#696cff" xlink:href="#path-1"></use>
                      <g id="Path-3" mask="url(#mask-2)">
                        <use fill="#696cff" xlink:href="#path-3"></use>
                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                      </g>
                      <g id="Path-4" mask="url(#mask-2)">
                        <use fill="#696cff" xlink:href="#path-4"></use>
                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                      </g>
                    </g>
                    <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                      <use fill="#696cff" xlink:href="#path-5"></use>
                      <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                    </g>
                  </g>
                </g>
              </g>
              </img>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Ekskul</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="#" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>
          <?php
          include '../../config/koneksi.php';
          if($_SESSION['hak_akses'] == "Murid"){
          }
          else{
          if($_SESSION['hak_akses'] == "Admin"){
          ?>
          <!-- Layouts -->
          <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user-pin"></i>
              <div data-i18n="Layouts">Admin</div>
            </a>

            <ul class="">
              <li class="menu-item">
                <a href="user/" class="menu-link"><i class='bx bxs-user-account'></i>&nbsp&nbsp&nbsp
                  <div data-i18n="Without menu">Data User</div>
                </a>
              </li>
            </ul>

            <?php
          }
            ?>
          <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Layouts">List</div>
            </a>

            <ul class="">
              <li class="menu-item">
                <a href="ekskul/index.php" class="menu-link"><i class='bx bxs-group'></i>&nbsp&nbsp&nbsp
                  <div data-i18n="Without menu">Ekskul</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="jadwal/index.php" class="menu-link"><i class='bx bxs-calendar'></i>&nbsp&nbsp&nbsp
                  <div data-i18n="Without menu">Jadwal</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="saran/index.php" class="menu-link"><i class='bx bx-comment-detail'></i>&nbsp&nbsp&nbsp
                  <div data-i18n="Without navbar">Saran</div>
                </a>
              </li>
            </ul>
          </li>
        <?php
          }
        ?>
          <!-- Components -->
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <a href="../"><span class="fw-semibold d-block">
                  Halaman Utama
                  </span>
                </a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/assets/img/avatars/avatar.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/assets/img/avatars/avatar.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <span class="fw-semibold d-block">

                          <?php
                          if (!isset($_SESSION['username'])) {
                            echo "";
                          } else {
                            echo $_SESSION['username'];
                          };
                          ?>

                        </span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../../backend/logout.php">
                      <i class="bx bx-power-off me-2"></i>

                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- Content wrapper -->
        <div class="content-wrapper">

        <div class="row container-xxl container-p-y">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <i class='bx bxs-user-account'></i>&nbsp&nbsp&nbspJumlah User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                              <?php
                                              $query = mysqli_query($db, "SELECT COUNT('id') as jmlh FROM user");
                                              if(mysqli_num_rows($query) > 0){
                                                while($row = mysqli_fetch_array($query)){
                                                  echo $row['jmlh'];
                                                }
                                              }
                                              ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              <i class='bx bxs-group'></i>&nbsp&nbsp&nbspJumlah Ekskul</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                              $query = mysqli_query($db, "SELECT COUNT('id') as jmlh FROM list_ekskul");
                                              if(mysqli_num_rows($query) > 0){
                                                while($row = mysqli_fetch_array($query)){
                                                  echo $row['jmlh'];
                                                }
                                              }
                                              ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                              <i class='bx bxs-user'></i>&nbsp&nbsp&nbspJumlah pembina
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php
                                              $query = mysqli_query($db, "SELECT COUNT('id') as jmlh FROM user WHERE hak_akses = 'Guru'");
                                              if(mysqli_num_rows($query) > 0){
                                                while($row = mysqli_fetch_array($query)){
                                                  echo $row['jmlh'];
                                                }
                                              }
                                              ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                              <i class='bx bxs-user'></i>&nbsp&nbsp&nbspjumlah murid</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                              $query = mysqli_query($db, "SELECT COUNT('id') as jmlh FROM user WHERE hak_akses = 'Murid'");
                                              if(mysqli_num_rows($query) > 0){
                                                while($row = mysqli_fetch_array($query)){
                                                  echo $row['jmlh'];
                                                }
                                              }
                                              ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

          <!-- Content -->
          <div id="carouselExample" class="carousel slide carousel-fade container-xxl container" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../assets/assets/img/elements/IMG_2666.JPG" alt="First slide" />
                <div class="carousel-caption d-none d-md-block">
                  <h3>Ekskul Basket</h3>
                  <p>olahraga bola berkelompok yang terdiri atas dua tim beranggotakan masing-masing lima orang yang
                    saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../assets/assets/img/elements/IMG_3190.JPG" alt="Second slide" />
                <div class="carousel-caption d-none d-md-block">
                  <h3>Ekskul Pramuka</h3>
                  <p>sistem pendidikan kepanduan yang disesuaikan dengan keadaan, kepentingan dan perkembangan
                    masyarakat dan bangsa Indonesia.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../assets/assets/img/elements/IMG_6395.JPG" alt="Third slide" />
                <div class="carousel-caption d-none d-md-block">
                  <h3>Ekskul Padus</h3>
                  <p>istilah untuk menunjukkan ensemble musik yang terdiri dari musik dan penyanyi-penyanyi yang
                    menyanyikan lagu dalam harmoni menggunakan jenis suara yang berbeda-beda.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../assets/assets/img/elements/IMG_2986.jpg" alt="Third slide" />
                <div class="carousel-caption d-none d-md-block">
                  <h3>Dan lainnya</h3>
                  <p>Masih banyak ekstrakulikuler lainnya yang bisa di coba sesuai bidang yang kalian minati</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
        
        <div class="container-xxl flex-grow-1 container-p-y ">
          <div class="row">
            <div class="col-lg-14 mb-4 order-0">
              <div class="col-lg-12 col-md-10 col-14 mb-4">
              <div class="card">
                <div class="d-flex align-items-end row">
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h5 class="card-title text-primary">Selamat Datang!
                        <!--namauser-->🎉✨
                      </h5>
                      <p class="mb-4">
                        Ekstrakurikuler adalah kegiatan pengembangan karakter dalam rangka perluasan potensi, bakat,
                        minat,
                        kemampuan, kepribadian, kerja sama, dan kemandirian peserta didik. Diharapkan siswa Cinta Kasih
                        Tzu Chi dapat
                        memilih ekstrakurikuler sesuai bidang.
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                      <img src="../assets/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="divider">
              <div class="divider-text"><h2>Saran</h2></div>
            </div>

            <div class="row container-xxl container-p-y">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary text-uppercase">
                                              <img src="../assets/assets/img/avatars/avatar.png" alt class="w-px-50 h-auto rounded-circle" /></div>
                                              <div class="mb-0 font text-gray">Yoga</div>
                                              <br />
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">"Wahhh aplikasinya ada yang kurang sedikit, tapi selebihnya bagus."</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary text-uppercase">
                                              <img src="../assets/assets/img/avatars/avatar.png" alt class="w-px-50 h-auto rounded-circle" /></div>
                                              <div class="mb-0 font text-gray">Yoga</div>
                                              <br />
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">"Wahhh aplikasinya ada yang kurang sedikit, tapi selebihnya bagus."</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary text-uppercase">
                                              <img src="../assets/assets/img/avatars/avatar.png" alt class="w-px-50 h-auto rounded-circle" /></div>
                                              <div class="mb-0 font text-gray">Yoga</div>
                                              <br />
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">"Wahhh aplikasinya ada yang kurang sedikit, tapi selebihnya bagus."</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary text-uppercase">
                                              <img src="../assets/assets/img/avatars/avatar.png" alt class="w-px-50 h-auto rounded-circle" /></div>
                                              <div class="mb-0 font text-gray">Yoga</div>
                                              <br />
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">"Wahhh aplikasinya ada yang kurang sedikit, tapi selebihnya bagus."</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary text-uppercase">
                                              <img src="../assets/assets/img/avatars/avatar.png" alt class="w-px-50 h-auto rounded-circle" /></div>
                                              <div class="mb-0 font text-gray">Yoga</div>
                                              <br />
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">"Wahhh aplikasinya ada yang kurang sedikit, tapi selebihnya bagus."</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-8 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <center><a href="halamansaran"><img src="https://cdn-icons-png.flaticon.com/512/262/262038.png" style="width:80px;height:80px;"></a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
    <script src="../assets/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
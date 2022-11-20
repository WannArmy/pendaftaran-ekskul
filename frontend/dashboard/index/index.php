<?php
include "../luar.php";
?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <?php
          if($_SESSION['hak_akses'] == "Admin"){
          ?>
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
                                <i class='bx bxs-user'></i>&nbsp&nbsp&nbspJumlah murid</div>
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
    <?php
          }
          if($_SESSION['hak_akses'] == "Murid"){
            ?>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y ">
        <div class="row">
            <div class="col-lg-14 mb-2 order-0">
                <div class="col-lg-12 col-md-10 col-14">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                <h5 class="card-title text-primary">Pesan Terbaru</h5>
                                    <?php
                                    $nama = $_SESSION['nama'];
                                    $query0 = mysqli_query($db, "SELECT * FROM minat WHERE siswa='$nama' ORDER BY ekskul ASC");
                                        while($row0 = mysqli_fetch_array($query0)){
                                            $ekskul0 = $row0['ekskul'];
                                            echo "<h6 class='card-title'>".$ekskul0."</h6>";
                                            $query = mysqli_query($db, "SELECT * FROM pesan WHERE ekskul='$ekskul0' ORDER BY tanggal LIMIT 3");
                                            while($row = mysqli_fetch_array($query)){
                                                $pesan = $row['pesan'];
                                                $tgl = $row['tanggal'];
                                                echo "( ".$tgl." )".$pesan."<br>";
                                            }     
                                            echo "<br>";


                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
          }
        ?>
        <div id="carouselExample" class="carousel slide carousel-fade container-xxl container" data-bs-ride="carousel"
            style="margin-top:1em;">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExample" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../../assets/assets/img/elements/IMG_2666.JPG" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Ekskul Basket</h3>
                        <p>olahraga bola berkelompok yang terdiri atas dua tim beranggotakan masing-masing lima orang
                            yang
                            saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../assets/assets/img/elements/IMG_3190.JPG" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Ekskul Pramuka</h3>
                        <p>sistem pendidikan kepanduan yang disesuaikan dengan keadaan, kepentingan dan perkembangan
                            masyarakat dan bangsa Indonesia.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../assets/assets/img/elements/IMG_6395.JPG" alt="Third slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Ekskul Padus</h3>
                        <p>istilah untuk menunjukkan ensemble musik yang terdiri dari musik dan penyanyi-penyanyi yang
                            menyanyikan lagu dalam harmoni menggunakan jenis suara yang berbeda-beda.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../assets/assets/img/elements/IMG_2986.jpg" alt="Third slide" />
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
                                        <?= $_SESSION['username'] ?>🎉✨
                                    </h5>
                                    <p class="mb-4">
                                        Ekstrakurikuler adalah kegiatan pengembangan karakter dalam rangka perluasan
                                        potensi, bakat,
                                        minat,
                                        kemampuan, kepribadian, kerja sama, dan kemandirian peserta didik. Diharapkan
                                        siswa Cinta
                                        Kasih
                                        Tzu Chi dapat
                                        memilih ekstrakurikuler sesuai bidang.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="../../assets/assets/img/illustrations/man-with-laptop-light.png"
                                        height="140" alt="View Badge User"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
              if($_SESSION['hak_akses'] == "Guru"){
                $guru = $_SESSION['nama'];
                $query = mysqli_query($db, "SELECT * FROM list_ekskul WHERE guru='$guru'");
                while($row = mysqli_fetch_array($query)){
              ?>
                <div class="col-lg-12 col-md-10 col-14 mb-4">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h2 class="card-title text-primary">Eskul : <?= $row['judul'] ?>
                                    </h2>
                                    <p class="mb-4">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            <i class='bx bxs-user'></i>&nbsp&nbsp&nbspjumlah murid :
                                            <?php
                        $ekskul = $row['judul'];
                                              $query = mysqli_query($db, "SELECT COUNT('id') as jmlh FROM minat WHERE ekskul = '$ekskul'");
                                              if(mysqli_num_rows($query) > 0){
                                                while($row = mysqli_fetch_array($query)){
                                                  echo $row['jmlh'];
                                                }
                                              }
                                              ?>

                                            <br /><br /><a href="../siswa/" class="btn btn-outline-primary">Detail</a>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="../../assets/assets/img/illustrations/girl-doing-yoga-light.png"
                                        height="140" alt="View Badge User"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/girl-doing-yoga-light.png" />
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
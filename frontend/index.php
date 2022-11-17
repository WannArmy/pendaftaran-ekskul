<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Ekstrakurikuler | SMK CINTA KASIH TZU CHI</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/logo-cktc.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/card.css">


</head>

<body>

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#home">
                                <img src="assets/images/logo-cktc.png" width="13%" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne"
                                aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <?php
                                    if(isset($_SESSION['hak_akses'])){
                                        $now = time();

                                        if($now > $_SESSION['expire']){
                                          session_destroy();
                                          echo "<script>alert('Session has been destoryed!!');location.href=('/');</script>";
                                        }
                                    if($_SESSION['hak_akses'] == "Murid"){

                                    }
                                    else{
                                    ?>
                                                                    <li class="nav-item">
                                        <a class="page-scroll" href="dashboard/">Admin</a>
                                    </li>
                                    <?php
                                    }
                                }
                                    ?>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#home">BERANDA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#service">EKSKUL</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="about">TENTANG KAMI</a>
                                    </li>
                                    <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<li class='nav-item'>
                                        <a class='page-scroll' href='#row'>DAFTAR</a>

                                    </li>";
                                    }
                                    else{
                                        echo "<li class='nav-item'>
                                        <a class='page-scroll' href='#row'>".$_SESSION['username']."</a>
                                        </li>";
                                    };
                                    ?>

                                </ul>
                            </div>

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/header-bg.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="header-content text-center">
                            <h3 class="header-title">Pilih ekstrakurikuler kesukaanmu di sini</h3>
                            <p class="text">ORANG TERPELAJAR MENGGUNAKAN WAKTU LUANGNYA UNTUK BELAJAR</p>
                            <ul class="header-btn">
                                <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<li><a class='main-btn btn-one' href='login/'>Masuk</a></li>
                                        <li><a class='main-btn btn-two' href='register/'>Daftar</i></a></li>";
                                    }
                                    else{
                                        echo "<li><a class='main-btn btn-one page-scroll' href='#service'>Ayo Lihat Daftar Ekskul</a></li>";
                                    };
                                    ?>
                            </ul>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="assets/images/header-shape.svg" alt="shape">
            </div>
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="service" class="services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-10">
                        <h4 class="title">Daftar Ekstrakurikuler</h4>
                        <p class="text">SMK Cinta Kasih Tzu Chi menyediakan beberapa ekstrakurikuler yang seru dan gokil
                            dimana semuanya mengedukasi kita semua!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <!-- flipcard -->
            <div class="scene">
            <?php
include '../config/koneksi.php';
$query = mysqli_query($db, "SELECT * FROM list_ekskul");
if(mysqli_num_rows($query) > 0){
while($row = mysqli_fetch_array($query)){
?>

                <label class="card-wrap">
                    <input type="checkbox" class="flipcard">
                    <div class="card">
                        <div class="front card-face">
                            <h2><?= $row['judul'] ?></h2>
                            <img src="assets/images/tmp/<?= $row['gambar'] ?>" class="card-photo" alt="Tidak Ada Gambar">
                        </div>
                        <div class="back card-face">
                            <p><?= $row['keterangan'] ?></p>
                            <br>
                            Guru: <?= $row['guru'] ?>
                        </div>
                    </div>
                </label>

            <?php
}
}
            ?>
                        </div>
            <section id="contact" class="contact-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center pb-10">
                                <h4 class="title">Tunggu apalagi</h4>
                                <?php
                                    if(!isset($_SESSION['username'])){
                                    
                                        ?>

                                <p class="text">Bagi teman-teman yang berminat bergabung dengan ekskul untuk belajar dan
                                    bersenang-senang bersama, kalian bisa mendaftar di link berikut</p>
                            </div> <!-- section title -->
                        </div>
                    </div> <!-- row -->
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="contact-form">
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <a href="login/" class="main-btn page-scroll">Dashboard</a>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- row -->
                    </div>
                </div> <!-- row -->
                <?php
                                    }
                                    else{
                                        ?>

                <p class="text">Bagi teman-teman yang berminat bergabung dengan ekskul untuk belajar dan
                    bersenang-senang bersama, ayo langsung daftar di link berikut dan jika ada saran silakan klik link dibawah ini.</p>
        </div> 
        </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <div class="col-md-12">
                        <div class="single-form form-group text-center">
                            <a href="dashboard/" class="main-btn page-scroll">Daftar</a>
                        </div> <!-- single form -->
                    </div>
                </div> <!-- row -->
            </div> <!-- row -->
        </div>
        </div> <!-- row -->
        <?php
                                    };
                                    ?>
        </div> <!-- conteiner -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-logo-support d-md-flex align-items-end justify-content-between">
                            <div class="footer-logo d-flex align-items-end">
                                <a class="mt-30" href="index.html"><img src="assets/images/logo-cktc.png" width="13%"
                                        alt="Logo"></a>

                                <ul class="social mt-30">
                                    <li><a href="https://www.facebook.com/profile.php?id=100022463173477"><i
                                                class="lni-facebook-filled"></i></a></li>
                                    <!-- <li><a href="#"><i class="lni-twitter-original"></i></a></li> -->
                                    <li><a href="https://www.instagram.com/smkcintakasihtzuchi/"><i
                                                class="lni-instagram-original"></i></a></li>
                                    <!-- <li><a href="#"><i class="lni-linkedin-original"></i></a></li> -->
                                </ul>
                            </div> <!-- footer logo -->

                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row" id="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Ekstrakurikuler</h6>
                            <ul>
                                <li><a href="#service" class="page-scroll">Daftar Ekskul</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Profil</h6>
                            <ul>
                                <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<li><a href='login/'>Masuk</a></li>
                                        <li><a href='register/'>Daftar</a></li>";
                                    }
                                    else{
                                        echo "<li><a href='../backend/logout.php'>Logout</a></li>";
                                    };
                                    ?>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div>
            </div> <!-- footer newsletter -->
        </div>
        </div> <!-- row -->
        </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
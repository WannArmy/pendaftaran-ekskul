<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kelompok 5</title>
</head>
<body>
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logo-cktc.png" type="image/png">

<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<!--====== Line Icons css ======-->
<link rel="stylesheet" href="../assets/css/LineIcons.css">

<!--====== Magnific Popup css ======-->
<link rel="stylesheet" href="../assets/css/magnific-popup.css">

<!--====== Default css ======-->
<link rel="stylesheet" href="../assets/css/default.css">

<!--====== Style css ======-->
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/card.css">

<!-- Works -->
    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#home">
                                <img src="../assets/images/logo-cktc.png" width="13%" alt="Logo">
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
                                        <a class="page-scroll" href="../">BERANDA</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="page-scroll" href="#service">EKSKUL</a>
                                    </li> -->

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#service">ABOUT US</a>
                                    </li>
                                    <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<li class='nav-item'>
                                        <a class='page-scroll' href='../register/'>DAFTAR</a>

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

        <div id="home" class="header-hero bg_cover" style="background-image: url(../assets/images/header-bg.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="header-content text-center">
                            <br><br>
                            <h1 class="header-title">About Us</h1>

                            <p class="text">“Beri seseorang sebuah program, buat dia frustrasi selama sehari.
Ajari seorang pria untuk memprogram, buat dia frustrasi seumur hidup. ”</p>
                            <p class="text">― Muhammad Waseem</p>


                            
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="../assets/images/header-shape.svg" alt="shape">
            </div>
        </div> <!-- header content -->
    </header>
    <section id="service" class="services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-10">
                        <h4 class="title">About Us</h4>
                        <p class="text">Tentang Kita</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

    

    <!--====== HEADER PART ENDS ======-->

<br>
<br>
<br>
<div class="basic-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-container">
                    <div class="image-container">
                        <a href="https://www.instagram.com/janssen_125/">
                            <img class="img-fluid" src="images/jansen.jpg" alt="alternative">
                        </a>
                    </div> <!-- end of image-container -->
                    <p><strong><center>Janssen Addison</center></strong></p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <div class="text-container">
                    <div class="image-container">
                        <a href="https://www.instagram.com/rxchx05/">
                            <img class="img-fluid" src="images/rici.jpg" alt="alternative">
                        </a>
                    </div> <!-- end of image-container -->
                    <p><strong><center>Richie Chuandriwinata</center></strong></p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <div class="text-container">
                    <div class="image-container">
                        <a href="https://www.instagram.com/steven_sebastian96/">
                            <img class="img-fluid" src="images/sebas.jpg" alt="alternative">
                        </a>
                    </div> <!-- end of image-container -->
                    <p><strong><center> Steven Sebastian </center></strong></p>                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="text-container">
                    <div class="image-container">
                        <a href="https://www.instagram.com/timotiusavaro/">
                            <img class="img-fluid" src="images/timo.jpg" alt="alternative">
                        </a>
                    </div> <!-- end of image-container -->
                    <p><strong><center>Timotius Avaro Andrelo Putra</center></strong></p>                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <div class="text-container">
                    <div class="image-container">
                        <a href="https://www.instagram.com/shelatifa_/">
                            <img class="img-fluid" src="images/sela.jpg" alt="alternative">
                        </a>
                    </div> <!-- end of image-container -->
                    <p><strong><center>Shela Tifa Pramono</center></strong></p>                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <div class="text-container">
                    <div class="image-container">
                        <a href="https://www.instagram.com/fflcaa.pratama/">
                            <img class="img-fluid" src="images/feli.jpg" alt="alternative">
                        </a>
                    </div> <!-- end of image-container -->
                    <p><strong><center>Felicia Natasha Pratama</center></strong></p>                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="col-lg-4">
            <div class="text-container">
                <div class="image-container">
                    <a href="https://www.instagram.com/yogahs__/">
                        <img class="img-fluid" src="images/yoga.jpg" alt="alternative">
                    </a>
                </div> <!-- end of image-container -->
                <p><strong><center>Yoga Hose Tambunan</center></strong></p>            </div> <!-- end of text-container -->
        </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-4 -->
<!-- end of works -->
</body>
</html>
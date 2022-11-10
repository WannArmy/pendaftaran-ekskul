<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../login/css/style.css">

    <title>Register</title>
</head>

<body>
    <?php
    if (isset($_SESSION['pesan'])) {
        echo "alert(pesan)";
    }
    ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../login/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Daftar</h3>
                                <p class="mb-4">Silahkan masukkan data diri kamu dibawah ini.</p>
                            </div>
                            <form action="../../backend/register/proses-register.php" method="post">
                                <div class="form-group first">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama">

                                </div>
                                <div class="form-group first">
                                    <label for="email">E-mail(Sekolah)</label>
                                    <input type="email" name="email" class="form-control" id="email">

                                </div>
                                <div class="form-group first">
                                    <label for="nohp">No.Hp</label>
                                    <input type="number" name="nohp" class="form-control" id="nohp" maxlength=13>

                                </div>
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">

                                </div>
                                <input type="submit" name="submit" value="Register" class="btn btn-block btn-primary">
                                <!-- 
              <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div> -->
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="../login/js/jquery-3.3.1.min.js"></script>
    <script src="../login/js/popper.min.js"></script>
    <script src="../login/js/bootstrap.min.js"></script>
    <script src="../login/js/main.js"></script>
</body>

</html>
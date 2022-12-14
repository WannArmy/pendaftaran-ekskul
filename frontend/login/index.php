<?php
session_start();
if(!isset($_SESSION['id'])){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../assets/images/logo-cktc.png" type="image/png">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
  </head>
  <body>
  <?php
    if (isset($_SESSION['pesan'])) {
        echo "<script>alert('".$_SESSION['pesan']."');</script>";
    }
    ?>
  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Masuk</h3>
              <p class="mb-4">"Ekspresi wajah seseorarng merupakan cerminan dari kondisi batinnya."<br><span style="float:right;">- - Master Cheng Yen</span></p><br>
            </div>
            <form action="../../backend/proses-login.php" method="post">
              <div class="form-group first">
                <label for="username">Nama Pengguna</label>
                <input type="text" name="username" class="form-control" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" class="form-control" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Saya Ingat</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Lupa Kata Sandi</a></span> 
              </div>

              <input type="submit" name="submit" value="Masuk" class="btn btn-block btn-primary">
              <br>
              <center>
              <p class="mb-4">Belum Punya akun? <a href="../register/">Daftar Disini</a></p>
              </center>
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

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php
}
else{
  if($_SESSION['hak_akses'] == "Murid"){
  echo "<script>location.href=('../../')</script>";
}
else{
  echo "<script>location.href=('../dashboard/')</script>";
}
};
?>
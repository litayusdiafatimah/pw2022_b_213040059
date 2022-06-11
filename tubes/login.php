<?php
session_start();
require 'functions.php';

// cek cookie 
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id" );
$row = mysqli_fetch_assoc($result);

// cek cookie dan username
if( $key === hash('sha256', $row['username']) ) {
  $_SESSION['login'] = true;
}

}

if( isset($_SESSION["login"]) ) {
    header("Location: tables.php");
    exit;
  }



if( isset($_POST["login"]) ) {

   $username = $_POST["username"];
   $password = $_POST["password"];

   $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");


   if( mysqli_num_rows($result) === 1 ) {

        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            $_SESSION["login"] = true;

            if( isset($_POST['remember']) ) {
              // buat cookie

              setcookie('id', $row['id'], time()+60);
              setcookie('key', hash('sha256', $row['username']), time()+60 );
            }

            header("Location: tables.php");
            exit;
        }
   }

   $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>Login</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="js/semantic.min.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="inner_page login">
    <div class="full_container">
      <div class="container">
        <div class="center verticle_center full_height">
          <div class="login_section">
            <div class="logo_login">
              <div class="center">
                <!-- <img width="210" src="images/logo/logo.png" alt="#" /> -->
                <h1 class="text-white">SELAMAT DATANG!!</h1>
                <?php if(isset($error) )  : ?>
                   <p style="color: red; font-style:italic;">username / password salah</p>
                 <?php endif; ?>
              </div>
            </div>
            <div class="login_form">
              <form autocomplete="off" method="post" action="">
                <fieldset>
                  <div class="field">
                    <label class="label_field">Username</label>
                    <input type="text" name="username" placeholder="Username"/>
                  </div>
                  <div class="field">
                    <label class="label_field">Password</label>
                    <input type="password" name="password" placeholder="Password" />
                  </div>
                  <div class="field">
                    <label class="label_field hidden">hidden label</label>
                    <label class="form-check-label"><input type="checkbox" class="form-check-input" /> Remember Me</label>
                  </div>
                  <div class="field margin_0">
                    <label class="label_field hidden">hidden label</label>
                    <button  type="submit" name="login" class="main_bt">Log In</button>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="js/animate.js"></script>
    <!-- select country -->
    <script src="js/bootstrap-select.js"></script>
    <!-- nice scrollbar -->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
      var ps = new PerfectScrollbar("#sidebar");
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
  </body>
</html>

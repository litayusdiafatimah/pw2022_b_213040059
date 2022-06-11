<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$film = query("SELECT * FROM film join genre on genre.id_genre = film.genre");

if (isset ($_POST["cari"]) ) {
    $film = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://kit.fontawesome.com/1f6e0cf1df.js" crossorigin="anonymous"></script>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>Halaman Admin</title>
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
    <!-- fancy box js -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="inner_page tables_page">
    <div class="full_container">
      <div class="inner_container">
        <!-- Sidebar  -->
        <nav id="sidebar">
          <div class="sidebar_blog_1">
            
            <div class="sidebar_user_info">
              <div class="icon_setting"></div>
              <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="img/self.jpg" alt="#" /></div>
                <div class="user_info">
                  <h6>Lita Yusdia Fatimah</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar_blog_2">
            <h4>Menu</h4>
            <ul class="list-unstyled components">
              <li>
                <a href="tables.php"><i class="fa fa-table purple_color2"></i> <span>Tabel</span></a>
              </li>
              <a href="../tubes/report.php" class="mb-1 ml-3 btn btn-outline-success btn-sm btn-info mt-4 col-4">Cetak PDF</a>
              
            </ul>
          </div>
        </nav>
        <!-- end sidebar -->
        <!-- right content -->
        <div id="content">
          <!-- topbar -->
          <div class="topbar">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="full">
                <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                <div class="logo_section">
                  <a href="index.html"><img class="img-responsive" src="img/FLIX.png" alt="#" /><strong></strong></a>
                </div>
                <div class="right_topbar">
                  <div class="icon_info">
                    <ul class="user_profile_dd">
                      <li>
                        <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="img/self.jpg" alt="#" /><span class="name_user">Lita Yusdia Fatimah</span></a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
          <!-- end topbar -->
          <!-- dashboard inner -->
          <div class="midde_cont">
            <div class="container-fluid">
              <div class="row column_title">
                <div class="col-md-12">
                  <div class="page_title">
                
                    <form action="" method="post" class="row g-3">
                      <div class="col-6">
                        <input type="text"  name="keyword" class="form-control" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword">
                      </div>
                      <div class="col-auto">
                        <button type="submit" name ="cari" class="btn btn-primary mb-3" id="tombol-cari">Cari</button>
                      </div>

                    </form>

                    
                  </div>
                </div>
              </div>
              <!-- row -->
              <div class="row">
                
                <!-- table section -->
                <div class="col-md-12">
                  <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head col-md-12 ">
                      
                      <div class="row justify-content-between ">
                      <div class="heading1 margin_0 col-md-6">
                        <h2>Data Film Indonesia</h2>
                      </div>
                        <a href="tambah.php" class="btn  float-sm-end btn-primary">Tambah Data</a>
                      </div>
                    </div>
                    <div class="table_section padding_infor_info">
                      <div class="table-responsive-sm">
                      <div id="container">
                        <table class="table">
                          <thead>
                          <tr>
                              <th>No.</th>
                              <th>Poster</th>
                              <th>Judul</th>
                              <th>Genre</th>
                              <th>Durasi</th>
                              <th>Sutradara</th>
                              <th>Pemeran</th>
                              <th>Sinopsis</th>
                              <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>
      <?php $i = 1; ?>
          <?php foreach( $film as $row): ?>
               <tr>
                  <td><?= $i; ?></td>
                  <td><img src="img/<?php echo $row["poster"]; ?>" class="img-thumbnail" width="300"></td>
                  <td><?= $row["judul"]; ?></td>
                  <td><?= $row["nama_genre"]; ?></td>
                  <td><?= $row["durasi"]; ?></td>
                  <td><?= $row["sutradara"]; ?></td>
                  <td><?= $row["pemeran"]; ?></td>
                  <td><?= $row["sinopsis"]; ?></td>
                 <td>
                   <a href="ubah.php?id=<?= $row["id"]?>"><i class="fa-solid fa-pen"></i></a>
                   <a href="hapus.php?id=<?= $row["id"]?>" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                          </tbody>
                        </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- footer -->
            <div class="container-fluid">
              <div class="footer">
                <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
              </div>
            </div>
          </div>
          <!-- end dashboard inner -->
        </div>
      </div>
      <!-- model popup -->
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">Modal body..</div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end model popup -->
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="js/animate.js"></script>
    <!-- select country -->
    <script src="js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="js/Chart.min.js"></script>
    <script src="js/Chart.bundle.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
      var ps = new PerfectScrollbar("#sidebar");
    </script>
    <!-- fancy box js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- calendar file css -->
    <script src="js/semantic.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>

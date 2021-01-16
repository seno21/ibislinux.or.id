<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <link rel="icon" type="img/png" href="IBIS/img/icon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="IBIS/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="IBIS/bootstrap/font/css/all.css">
  <link rel="stylesheet" href="IBIS/css/style.css">
  <link rel="stylesheet" href="hhttps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">


  <link rek="stylesheet" href="css/style.css">
  <title>IbisLinux Community</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container judul_navbar">
      <a class="navbar-brand judul_brand" href="index.php">
        <img class="top-logo" src="IBIS/img/icon.png">IBIS LINUX</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
          <a class="nav-item nav-link" href="downloads.php"><i class="fa fa-cloud-download-alt"></i>
            Download</a>
          <a class="nav-item nav-link" href="https://blog.ibislinux.org/" target="_blank"><i class="fa fa-blog"></i>
            Blog</a>
          <a class="nav-item nav-link active" href="community.php"><i class="fa fa-users"></i> Community</a>
          <a class="nav-item nav-link" href="faq.php"><i class="fa fa-question"></i> F.A.Q</a>
          <!--<a class="nav-item nav-link" href="#"><i class="fa fa-hands-helping"></i> Donate</a>-->
        </div>
      </div>
    </div>
    <!--ini div milik container nav-->
  </nav>

  <div class="container">
    <div class="row mt-5">
      <div class="col-sm">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="IBIS/img/ibis4.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="IBIS/img/ibis2.png" alt="First slide">
            </div>
            <!--<div class="carousel-item">
              <img class="d-block w-100" src="IBIS/img/ibis3.png" alt="Second slide">
            </div>-->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <p class="judul mt-5">
          IbisLinux Community
          <hr>
        </p>
      </div>
    </div>

    <div class="row">
    <div class="col-sm-6">
    <div class="card text-center mt-3 mb-3">
          <div class="card-hider">
            <h4>Fanspage Facebook</h4>
          </div>
          <div class="card-body faq">
            <h5 class="card-title">IbisLinux Facebook Fanspage</h5>
            <p class="card-text">Kunjungi fanspage kami dan jangan lupa untuk Like, share dan follow fanspage kami
            untuk berita terbaru mengenai IbisLinux. Kami akan mempublikasikan atau merilis IbisLinux lewat fanspage ini.</p>
            </div>
            <a href="https://web.facebook.com/ibislinux/?_rdc=1&_rdr" target="blank" class="btn btn-dark">Like Fanspage</a>
          </div>
    </div>
      <div class="col-sm-6">
        <div class="card text-center mt-3 mb-3">
          <div class="card-hider">
            <h4>Telegram Group</h4>
          </div>
          <div class="card-body faq">
            <h5 class="card-title">IbisLinux Telegram Group</h5>
            <p class="card-text">Selain Fanspage kami juga memiliki Telegram Group untuk informasi, diskusi
              dan report bug mengenai IbisLinux.
            </p>
            </div>
            <a href="https://t.me/ibislinux" target="blank" class="btn btn-dark">Join Telegram</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Loading -->
  <button class="btn-ibis ibis-position" type="button" disabled>
    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
    Loading...
  </button>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript">
    $(window).load(function () {
      $(".spinner-grow, .btn-ibis").fadeOut("slow");
    });
  </script>
  <!-- End Loading -->

  <!-- JQuery Bootstrap & Font Awesome-->
  <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>
  <script src="IBIS/js/jquery-3.4.1.js"></script>
  <script src="IBIS/bootstrap/font//js/all.js" data-auto-replace-svg="nest"></script>
  <script src="IBIS/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <!-- End Jquery -->

  <footer class="text-light bg-dark">
    <div class="container">
      <div class="row">
        <div class="col text-center mt-2">
          <p>
            <?php 
                /*$time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $finish = $time;
                $total_time = round(($finish - $start), 4);*/
                echo"&copy; ". (int)date('Y') . " IbisLinux | Lightweight and Elegant Linux Distribution" ;
                //echo "</br>";
                //echo 'Page generated in '.$total_time.' seconds.';?>
          </p>
        </div>
      </div>
    </div>
    <!--ini milik footer-->
  </footer>
</body>

</html>
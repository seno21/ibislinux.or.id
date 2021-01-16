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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="IBIS/css/style.css">


  <link rek="stylesheet" href="css/style.css">
  <title>FAQ | Frequently Asked Questions</title>
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
          <a class="nav-item nav-link" href="downloads.php"><i class="fa fa-cloud-download-alt"></i> Download</a>
          <a class="nav-item nav-link" href="https://blog.ibislinux.org/" target="_blank"><i class="fa fa-blog"></i>
            Blog</a>
          <a class="nav-item nav-link" href="community.php"><i class="fa fa-users"></i> Community</a>
          <a class="nav-item nav-link active" href="faq.php"><i class="fa fa-question"></i> F.A.Q</a>
          <!--<a class="nav-item nav-link" href="#"><i class="fa fa-hands-helping"></i> Donate</a>-->
        </div>
      </div>
    </div>
    <!--ini div milik container nav-->
  </nav>

  <!--Loading -->

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

  <!--Accordion-->
  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <p class="judul">Frequently Asked Questions</p>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p>NB: Berikut adalah beberapa pertanyaan umum yang sering kali pengguna atau user Ibis Linux tanyakan.<br>
          Pertanyaan-pertanyaan ini kami ambil dari Fanspage facebook, Telegram Group dan dari forum diskusi linux
          tertentu.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col mb-5">
        <div id="accordion">
          <div class="card mb-1">
            <div class="card-hider" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link text-left collapsed" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Ibis Linux ini apa ya?
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse faq show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                IbisLinux adalah distribusi GNU / Linux berdasarkan Linux From Scratch, hasil karya dari sebuah
                ketertarikan pada open-source, dimana pengguna bisa mempelajari dari awal tentang aplikasi yang ada di
                dalamnya. Dengan penggunaan yang mudah serta ringan, IbisLinux lebih dikhususkan untuk device x64 Low
                End, karena keringanan nya, RAM 2GB pun bisa menjalankan Ibis Linux. Bukan tanpa alasan kami
                mengembangkan Ibislinux ini, kami ingin mengenalkan kepada pengguna bagaimana memanajemen aplikasi
                mereka secara manual. Sehingga pengguna tahu apa saja yang harus di siapkan Jadi dari mulai mengunduh
                kode dasar aplikasi, mengekstrak berkas, kompilasi manual dan instalasi manual. Kami berharap dengan
                munculnya Ibislinux ini, bisa menambah semangat juang opensource di seluruh indonesia.
              </div>
            </div>
          </div>

          <div class="card mb-1">
            <div class="card-hider" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link text-left collapsed" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  Spesifikasi minimal buat install IbisLinux apa aja ya?
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse faq" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                Dengan penggunaan yang mudah serta ringan, IbisLinux lebih dikhususkan untuk device x64 Low End, karena
                keringanan nya, RAM 2GB pun bisa menjalankan Ibis Linux.
                Mungkin artikel ini bisa membantu <a
                  href="https://www.linuxsec.org/2018/12/ibislinux-distro-hacking-yang-powerfull.html?m=1"
                  target="_blank">"IbisLinux - Distro Hacking yang Powerfull dan Elegan"</a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-hider" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link text-left collapsed" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">
                  Bagaimana cara saya boot atau cara burning ke USB?
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse faq" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Ada banyak sekali cara untuk memburning iso Ibis Linux pada USB ataupun CD/DVD.
                Namun kami rekomendasikan anda menggunakan DD atau Rufus apabila ingin memburning pada USB,
                sedangkan jika untuk CD/DVD anda bisa menggunakan Brasero ataupun CD Burner XP.
                Kami merekomendasikan <a
                  href="https://www.tylexit.com/2018/11/cara-bootable-flashdisk-dengan-dd-linux.html" target="_blank">
                  Tylexit.com </a>untuk informasi cara penggunaan DD apabila ingin di burning pada usb.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-hider" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link text-left collapsed" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="false" aria-controls="collapseFour">
                  Ibis Linux pakai package manager apa om ?
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse faq" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-hider" id="headingFive">
              <h5 class="mb-0">
                <button class="btn btn-link text-left collapsed" data-toggle="collapse" data-target="#collapseFive"
                  aria-expanded="false" aria-controls="collapseFive">
                  Kok hanya console doang, nggak ada GUI nya ?
                </button>
              </h5>
            </div>
            <div id="collapseFive" class="collapse faq" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-hider" id="headingSix">
              <h5 class="mb-0">
                <button class="btn btn-link text-left collapsed" data-toggle="collapse" data-target="#collapseSix"
                  data-parent="#accordion">
                  Belum bisa stand alone ya?
                </button>
              </h5>
            </div>
            <div id="collapseSix" class="collapse faq" aria-labelledby="headingSix" data-parent="#accordion">
              <div class="card-body">
                 Ya, memang sebelumnya IbisLinux masih belum bisa di install standalone, namun seiring berjalan
                 waktu kami terus mengupayakan agar IbisLinux bisa stand alone. Pada versi yang sama tetap dengan 
                 codename Tyto Alba kami merealisasikan bahwa IbisLinux sudah bisa stand alone meskipun masih 
                 harus install secara manual, info lebih lanjut bisa cek <a href="https://web.facebook.com/ibislinux/?_rdc=1&_rdr" target="blank">Fanspage Facebook</a> kami.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--End accordion-->

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
  <script src="IBIS/js/jquery-3.4.1.js"></script>
  <script src="IBIS/bootstrap/font//js/all.js" data-auto-replace-svg="nest"></script>
  <script src="IBIS/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>
  <!-- End Jquery -->

  <footer class="text-light bg-dark">
    <div class="container">
      <div class="row">
        <div class="col text-center mt-2">
          <P>
            <?php echo"&copy; ". (int)date('Y') . " IbisLinux | Lightweight and Elegant Linux Distribution" ?>
          </p>
        </div>
      </div>
    </div>
    <!--ini milik footer-->
  </footer>
</body>

</html>
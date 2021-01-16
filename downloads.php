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
  <title>Download IbisLinux Distribution</title>
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
          <a class="nav-item nav-link active" href="downloads.php"><i class="fa fa-cloud-download-alt"></i> Download</a>
          <a class="nav-item nav-link" href="https://blog.ibislinux.org/" target="_blank"><i class="fa fa-blog"></i>
            Blog</a>
          <a class="nav-item nav-link" href="community.php"><i class="fa fa-users"></i> Community</a>
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
          Live ISO File Ibis Linux
          <hr>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        Berikut ini adalah file .iso dari IbisLinux yang bisa anda download dari beberapa sumber dan repository
        Official kami. Live Iso ini bisa anda buat bootable pada USB ataupun di burning langsung pada CD/DVD.
        Kami merekomendasikan menggunakan DD untuk membuat bootable pada usb, untuk informasi penggunaan cek
        <a href="https://www.tylexit.com/2018/11/cara-bootable-flashdisk-dengan-dd-linux.html"
          target="_blank">disini</a>.
        <br><br>
        <p>Kami sarankan juga anda mencoba terlebih dahulu mode live CD dari IbisLinux ini dengan bantuan software
          virtualization seperti
          <a href="https://www.vmware.com/id.html" target="_blank">VMWare</a> atau
          <a href="https://www.virtualbox.org/" target="_blank">Virtualbox</a>,
          agar lebih mengetahui kelebihan dan kekurangan dari IbisLinux ini sebelum di install pada PC sendiri.
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-3">
      <div class="col">
        <table class="table table-black table-responsive-sm">
          <thead class="text-center">
            <tr class="judul_tbl">
              <th>Name</th>
              <th>Type</th>
              <th>Size</th>
              <th>SHa1SUM</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td><a href="https://repo.c0delabs.com/ISO/ibislinux/iso/ibislinux-1.0/ibislinux-x86_64-beta-1.0.iso">
                  ibislinux-x86_64-beta-1.0.iso</a></td>
              <td>ISO</td>
              <td>2.1GB</td>
              <td>4a4aa326600fc5da94bfd47fab37e49bdd30036d</td>
            </tr>
          </tbody>
        </table>
        <div class="card mt-3">
          <div class="card-hider">
            <h6 class="mt-1">Install IbisLinux Using Rsync</h6>
          </div>
          <div class="card-body faq">
            <blockquote class="mb-0">
              <ul>
                <li>Buat partisi terlebih dahulu kami rekomendasikan sebesar 20GB dengan format <b>ext4 (/dev/sdaX)</b>
                </li>
                <li>Buat directory /tmp untuk penyimpanan data sementara<br>#<b> mkdir -v /tmp/{ibis,sfs,iso}</b></li>
                <li>Mounting file <b>.iso</b>, <b>system.sfs</b>, dan partisi yang telah dibuat <b>(/dev/sdaX)</b> ke
                  dalam direktori <b>/tmp/{ibis,sfs,iso}</b> yang sebelumnya telah dibuat juga</li>
                <li>Buat lagi directory <b>dev,proc,sys,tmp,run</b> di dalam folder <b>/tmp/ibis/</b>
                  <br># <b>mkdir -v /tmp/ibis/{dev,proc,sys,tmp,run}</b></li>
                <li>Salin semua file ibislinux dengan rsync ke dalam <b>/tmp/ibis/</b>, proses ini cukup memakan waktu
                  tunggu sampai selesai.
                  <br># <b>rsync -av /tmp/sfs/* /tmp/ibis/</b></li>
                <li>selanjutnya edit file <b>fstab</b> ibislinux, ganti <b>UUID</b> dengan partisi yang tadi sudah di
                  mounting ke ibislinux
                  <br># <b>nano /tmp/ibis/etc/fstab</b></li>
                <li>Update Grub agar IbisLinux terdeteksi terdeteksi<br># <b>update-grub</b></li>
                <p>Mungkin untuk penjelasan lebih jelas anda bisa mengunjungi link <a
                    href="https://blog.ibislinux.org/install-ibislinux/" target="_blank">disini</a></p>
              </ul>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col mt-4">
        <p class="judul"> Official Mirror IbisLinux </p>
        <hr>
        <img class="flag" src="IBIS/img/id.png">
        Download IbisLinux Mirror
        <ul>
          <li style="list-style-type: none;"><a href="https://repo.c0delabs.com/ISO/ibislinux/iso/ibislinux-1.0/"
              target="_blank">repo.c0delabs.com</a></li>
          <li style="list-style-type:none;"><a
              href="http://www.mediafire.com/file/i5b58iva1gz2k2w/ibislinux-x86_64-beta-1.0.iso/file"
              target="_blank">www.mediafire.com</a></li>
          <li style="list-style-type:none;"><a
              href="https://sourceforge.net/projects/ibislinux/files/iso/x64/ibislinux-x86_64-beta-1.0.iso/download"
              target="_blank">sourceforget.net</a></li>
          <li style="list-style-type: none;"><a
              href="https://drive.google.com/file/d/1yLwT5k2rgWUVMMVK9QeLETeDk9yYKn90/view"
              target="_blank">drive.google.com</a></li>
        </ul>
        <p>
          Mirroring tersebut hanyalah mirroring server download dari IbisLinux, dikarenakan Distro Linux ini masih
          sangat banyak kekurangan, maka untuk sementara kami belum mempunyai repository resmi kami sendiri. Semoga
          kedepanya
          linux ini akan lebih banyak memiliki dukungan dan semakin berkembang.
        </p>
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
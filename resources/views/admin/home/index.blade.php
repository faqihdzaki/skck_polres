<html lang="en" class="ie_11_scroll">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="hhhwidth=device-width, initial-scale=1">
  <title>SKCK ONLINE - LIBAS</title>

  <!-- App Landing Template http://www.templatemo.com/tm-474-app-landing -->
  <!-- CSS -->
  <link rel="stylesheet" href="\assets/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-a11y="true"></script>
  <link rel="stylesheet" href="\assets/css/templatemo_style.css">
  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="https://skck.polri.go.id/skckonline/assets/img/favicon.ico" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="shortcut icon" />


  <!-- WA -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send/?phone=%2B6282288880220&text=Hallo+Pelayanan+SKCK+Polrestabes+SEMARANG%2C" class="float" target="_blank">

    <i class="fab fa-whatsapp fa-2x"></i>
  </a>
  <!-- END WA -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
  <!-- Top menu -->
  <div class="show-menu">
    <a href="#" class="shadow-top-down">+</a>
  </div>
  <nav class="main-menu shadow-top-down">
    <ul class="nav nav-pills nav-stacked">
      <li><a href="{{route('admin.dashboard')}}" class="scroll_effect">Login Admin</a></li>
      <li><a href="/homeId" class="scroll_effect"><i class="flag flag-indonesia"></i></a></li>
      <li><a href="/homeEn" class="scroll_effect"><i class="flag flag-united-kingdom"></i></a></li>
    </ul>
  </nav>
  <!-- Home -->
  <section id="templatemo_home">
    <div class="container">
      <div class="templatemo_home_inner_wapper"><br>
        <!-- <img src="https://skck.polri.go.id/skckonline/assets/img/logo.png"> -->
        <h1 class="text-center"> SKCK</h1>
      </div>
      <div class="templatemo_home_inner_wapper">
        <h2 class="text-center">(Surat Keterangan Catatan Kepolisian)</h2><br>
        <p class="text-center">Kepolisian Resor Kota Besar (POLRESTABES) Semarang berkomitmen mempermudah proses pengurusan SKCK</p>
      </div>
      <div class="templatemo_home_inner_wapper btn_wapper">
        <div class="col-sm-12">
          <a href="/info" class="btn col-xs-12 scroll_effect shadow-top-down">
            PELAJARI LEBIH LANJUT
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Features -->
  <section id="templatemo_features">
    <div class="container-fluid">
      <header class="template_header">
        <h1 class="text-center"><span>SKCK HEBAT</span></h1>
      </header>
      <div class="col-sm-12">
        <div class="col-sm-6 col-lg-3 feature-box">
          <div class="feature-box-inner">
            <div class="feature-box-icon">
              <img src="\assets/img/images/online.png" style="width: 30%;"></img>
              <a href="/loginOnline">
            </div>
            <p> <strong> SKCK ONLINE</strong><br>
            <strong>(Permohonan Baru)</strong>
              Fitur ini digunakan untuk membantu proses
              pemohonan yang ada dengan mengisi form yang
              disediakan, kemudian pemohon akan mendapat
              notifikasi untuk pengambilan SKCK di Kantor
              POLRESTABES.
            </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 feature-box">
          <div class="feature-box-inner">
            <div class="feature-box-icon">
              <img src="\assets/img/images/takeaway.png" style="width: 30%;"></img>
              <a href="/loginTakeAway">
            </div>
            <p><strong>SKCK TAKE AWAY</strong><br>
            <strong>(Khusus Memperpanjang)</strong>
              Fitur ini adalah salah satu fitur yang ada
              untuk proses memperpanjang SKCK, dengan cara
              mengisi form keperluan memperpanjang dan
              membayar biaya PNBB sebesar Rp. 30.000.
            </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 feature-box">
          <div class="feature-box-inner">
            <div class="feature-box-icon">
              <img src="\assets/img/images/delivery.png" style="width: 30%;"></img>
              <a href="/loginDelivery">
            </div>
            <p><strong>SKCK DELIVERY</strong><br>
            <strong>(Khusus Disabelitas)</strong>
              Fitur ini adalah fitur yang di gunakan untuk
              pemohon yang memiliki Disabilitas.Disini ada
              2 cara, yang pertama mengisi data kemudian petugas
              datang membantu, dan mengisi sendiri.
            </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 feature-box">
          <div class="feature-box-inner">
            <div class="feature-box-icon">
              <img src="\assets/img/images/info.png" style="width: 30%;"></img>
              <a href="/info">
            </div>
            <p><strong>SKCK INFO</strong><br>
            <strong>(Informasi SKCK)</strong>
              Fitur ini adalah fitur terbaru yang ada di
              Polrestabes Semarang yang akan memunculkan 
              Informasi informasi seputar jadwal SKCK dan
              Informasi lainnya tentang Permohonan SKCK di 
              Polresetabes Semarang.
            </p></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Download -->
  <section id="templatemo_download">
    <div class="container">
      <header class="template_header">
        <h1 class="text-center"><span> Syarat & Ketentuan </span></h1>
      </header>

      <div class="row">
        <div class="col-md-6">
          <p><strong>WARGA NEGARA INDONESIA(WNI)</strong>
          </p>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi KTP dengan menunjukan KTP asli.</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi Paspor.</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi Kartu Keluarga (KK).</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi Akte Lahir / Kenal Lahir / Ijazah.</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi kartu identitas lain bagi yang belum memenuhi syarat untuk mendapatkan KTP.</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Pas foto berwarna ukuran 4 x 6 cm sebanyak 6 (enam) lembar dengan latar belakang merah, berpakaian sopan, tampak muka, dan bagi pemohon yang mengenakan jilbab, pasfoto harus tampak muka secara utuh.</h4><br>
        </div>
        <div class="col-md-6">
          <p><strong>WARGA NEGARA ASING(WNA)</strong> </p>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Surat permohonan dari sponsor, perusahaan, atau lembaga yang mempekerjakan, menggunakan, atau yang bertanggung jawab pada WNA.</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi KTP dan Surat Nikah apabila sponsor dari Suami/Istri Warga Negara Indonesia (WNI).</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi Paspor.</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi Kartu Izin Tinggal Terbatas (KITAS) atau Kartu Izin Tinggal Tetap (KITAP).</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi IMTA dari KEMENAKER RI</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Fotokopi Surat Tanda Melapor (STM) dari Kepolisian.</h4>
          <h4><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Pas foto berwarna ukuran 4 x 6 cm sebanyak 6 (enam) lembar dengan latar belakang berwarna kuning, berpakaian sopan, tampak muka, dan bagi pemohon yang mengenakan jilbab, pasfoto harus tampak muka secara utuh.</h4><br>
        </div>
        <div class="col-md-12">
          <!-- <a href="#" class="shadow-top-down"><img src="\assets/img/images/download_btn.png" /></a> -->
        </div>
      </div>
    </div>
  </section><br>
  <!-- Contact -->
  <section id="templatemo_contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <header class="template_header"><br><br>
            <h4 class="text-center"><span>Kami siap memberikan yang terbaik</span></h4><br>
            <h2 class="text-center"><span>Untuk Kepentingan Masyarakat</span></h2><br>
          </header>
          <div class="col-md-6">
            <p class="text-center"> <i class="fa fa-envelope"></i> Email <a href="mailto:skckrestabessmg@gmail.com"></a><br /></p>
            <p class="text-center">skckrestabessmg@gmail.com</p>
          </div>
          <div class="col-md-6">
            <p class="text-center"><i class="fa fa-phone"></i> Pelayanan SKCK Polrestabes Semarang (WA Chat Only)
            <a href="tel:+6282288880220"></a>
            </p>
            <p class="text-center">0822 8888 0220</p>
          </div>

        </div>
      </div>

    </div>

    <!-- Footer -->
    <!-- <footer> -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 footer-copyright">
          <p>Copyright &copy; 2021 <a href="#" target="_parent">CAN Creative</a></p>
        </div>
      </div>
    </div>
    <!-- </footer> -->
  </section>
  <!-- require plugins -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
  <!-- template mo config script -->
  <script src="{{ asset('assets/js/templatemo_scripts.js') }}"></script>
</body>

</html>
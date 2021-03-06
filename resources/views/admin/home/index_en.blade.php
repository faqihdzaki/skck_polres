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
        <h2 class="text-center">(Police Record)</h2><br>
        <p class="text-center">The Big City Police (POLRESTABES) Semarang committed to ease the processs of SKCK (Police Record)</p>
      </div> 
      <div class="templatemo_home_inner_wapper btn_wapper">
        <div class="col-sm-12">
          <a href="/info" class="btn col-xs-12 scroll_effect shadow-top-down">
            LEARN MORE
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Features -->
  <section id="templatemo_features">
    <div class="container-fluid">
      <header class="template_header">
        <h1 class="text-center"><strong>SKCK HEBAT</strong></h1>
      </header>
      <div class="col-sm-12">
        <div class="col-sm-6 col-lg-3 feature-box">
          <div class="feature-box-inner">
            <div class="feature-box-icon">
              <img src="\assets/img/images/online.png" style="width: 30%;"></img>
              <a href="/loginOnline">
            </div>
            <p> <strong> SKCK ONLINE</strong> <br>
            <strong>(New Request)</strong><br>
              This feature is used to assist the process
              existing application by filling out the form
              provided, then the applicant will receive
              notification for SKCK collection at the Office
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
            <p><strong>SKCK TAKE AWAY</strong> <br>
            <strong>(Special for Extend)</strong><br>
              This feature is one of the existing features
              for the process of extending the SKCK, by the way
              fill in the form. The reasond to extend and Must
              pay a PNBB fee of Rp. 30,000.
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
            <strong>(For Disability)</strong><br>
              This feature is a feature that is used for
              applicants with disabilities. Here are
              two ways, the first to fill in the data then the officer
              come help, and fill yourself up.
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
            <strong>(Information about SKCK)</strong><br>
              Features are the latest features that are here
              will bring up the locations that become
              there is a mobile SKCK. Including the SKCK schedule
              around in this Semarang area.
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
        <h1 class="text-center"><span> Terms & Conditions </span></h1>
      </header>

      <div class="row">
        <div class="col-md-6">
          <p><strong>CITIZENS OF INDONESIA</strong> </p>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of ID card by showing original ID card..</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of Passport.</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of Family Card</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of Birth Certificate / Birth Certificate / Diploma.</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of other ID cards for those who have not yet qualified to obtain ID card.</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> 4 x 6 cm color photograph of 6 (six) pieces with red background, dressed politely, face to face, and for applicant wearing hijab, photograph must be full face.</h5><br>
        </div>
        <div class="col-md-6">
          <p><strong>FOREIGN STATE CITIZENS</strong> </p>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Letter of application from sponsors, corporations, or agencies that employ, use, or be responsible to foreigners.</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of ID card and Marriage Letter if sponsor of Husband / Wife Citizen of Indonesia.</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of Passport.</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of Limited Stay Permit Card (KITAS) or Stay Permit Card (KITAP).</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of IMTA from KEMENAKER RI</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> Photocopy of Letter of Identity from Police.</h5>
          <h5><img src="{{ asset('assets/img/polisi/cek.png') }}" /> 4 x 6 cm color photographs of 6 (six) sheets with yellow background, politely dressed, face-to-face, and for applicants wearing headscarves, photographs must be fully visible.</h5><br>
        </div>
        <div class="col-md-12">
          <!-- <a href="#" class="shadow-top-down"><img src="\assets/img/images/download_btn.png" /></a> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Contact -->
  <section id="templatemo_contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <header class="template_header"><br><br>
            <h4 class="text-center"><span>We are ready to give our best</span></h4><br>
            <h2 class="text-center"><span>For the benefit of the Community</span></h2><br>
          </header>
          <div class="col-md-6">
            <p class="text-center"> <i class="fa fa-envelope"></i> Email <a href="mailto:skckrestabessmg@gmail.com"></a><br /></p>
            <p class="text-center">skckrestabessmg@gmail.com</p>
          </div>
          <div class="col-md-6">
            <p class="text-center"><i class="fa fa-phone"></i> Semarang Police SKCK Services (WA Chat Only)
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



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; SKCK </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href=" {{ asset('assets/css/components.css') }}">
  <style>
    .mySlides {display:none;}
  </style>
  <style>
    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>
<body><div id="app">
    <section class="section">
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
        
    <div class="p-4 m-3">
    <img src="https://skck.polri.go.id/skckonline/assets/img/logo.png" alt="logo" width="100px" class="rectangle"><br>
<h4 class="text-dark font-weight-normal">Selamat Datang pada Layanan <span class="font-weight-bold">SKCK POLRESTABES SEMARANG</span></h4>
<p class="text-muted">Silahkan masukan E-mail dan Nama lengkap anda</p>
<form method="POST" action="" class="needs-validation" novalidate="">
    <input type="hidden" name="_token" >          
          <div class="form-group">
        <label for="email" style="color:black;">Email</label>
    <input id="email" type="text" class="form-control" name="username" tabindex="1" required autofocus>
    <div class="invalid-feedback">
        Please fill in your username
    </div>
</div>

    <div class="form-group">
        <div class="d-block">
        <label for="nama"  style="color:black;">Nama Lengkap</label>
    </div>
    <input id="nama" type="nama" class="form-control form-nama" name="nama" tabindex="2" required>
    <div class="invalid-feedback">
        please fill in your password
    </div>
</div>

<!-- <div class="form-group">
    <input type="checkbox" name="show" class="form-checkbox" tabindex="3" id="show-password">
    <label class="" for="remember-me">Show Password</label>
</div> -->

    <div class="form-group text-right">
        <!-- <a href="auth-forgot-password.html" class="float-left mt-3">
        Forgot Password?
    </a> -->
    <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
        Next
    </button>
</div>

</form>

<div class="text-center mt-5 text-small">
    Support By &copy; Can Creative.
    <div class="mt-2">
</div>
</div>
</div>
    </div>
        <div class="col-lg-8 col-12 order-lg-1 order-2 min-vh-100 background-walk-x position-relative" data-background="{{ asset('assets/img/images/bg3.jpg') }}">
     <br> 
        <br>
        <br>
            <div class="mySlides center">
            <img src="https://skck.polri.go.id/skckonline/assets/img/logo.png" alt="" width="200px">
                <h5 class="font-weight-normal text-muted-transparent text-center">SKCK POLRESTABES SEMARANG</h5>
            </div>
                        <div class="absolute-bottom-left index-2">
                <div class="text-light p-5 pb-2">
                <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">Good Afternoon<div id='jam' ></div></h1>
                                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</div>
<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script type="text/javascript">
  // 1 detik = 1000
  window.setTimeout("waktu()",1000);  
  function waktu() {   
  var tanggal = new Date();  
  setTimeout("waktu()",1000);  
  document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
  }
  </script>
  <script type="text/javascript">
    $(document).ready(function(){		
      $('.form-checkbox').click(function(){
        if($(this).is(':checked')){
          $('.form-password').attr('type','text');
        }else{
          $('.form-password').attr('type','password');
        }
      });
    });
  </script>
</body>
</html>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
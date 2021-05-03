@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>CHOOSE YOUR LANGUAGE</h1>
  </div>

  <div class="card" style="height:100%;">
    <div class="card-body">
      <div class="owl-carousel owl-theme" id="products-carousel">
        <center>
          <P>Pilih salah satu form yang di sediakan dengan klik Link di bawah ini </P>
          <div class="row ">
            <div class="col-md-6">
              <a class="btn-btn" href="{{route('admin.SKCKForm')}}" ><p>SKCK ONLINE WNI</p>
              <!-- <img src="\assets/img/images/indo.svg" style="height: 100px;"><br><br> -->
            </div>

            <div class="col-md-6">
             <a class="btn-btn" href="{{route('admin.SKCKFormEn')}}"><p>SKCK ONLINE WNA</p>
               <!-- <img src="\assets/img/images/en.svg" style="height: 100px;">  -->
            </div>
        </center>
      </div>
    </div>
  </div>
  </div>
</section>

@endsection
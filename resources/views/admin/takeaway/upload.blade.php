@extends('layouts.admin-master-new')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Upload Bukti </h1>
  </div>


  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <center>
          <div class="form-group">
            <label>Upload Bukti Pembayaran Anda Ke Sini</label><br>
            <label><small>Biaya Rp.30.000</small></label>
          </div>
          <form action="/takeawaypayment" method="post" enctype="multipart/form-data" id="takeaway">
            @csrf
            <input type="file" class="form-control m-2" name="takeaway_payment" style="width:50%; height: 350px" id="">
            <div class="form-group">
              <label>ID Anda :</label><br>
              <small>Silahkan masukan Id anda yang anda dapat pada Email</small>
              <input type="text" name="id" id="" class="form-control m-2" style="width:50%;">
            </div>
            <div class="form-group">
              <label>Email Anda:</label><br>
              <small>Silahkan masukan email Yang anda gunakan</small>
              <input type="text" name="email" id="" class="form-control m-2" style="width:50%;">
              
              <button type="submit" form="takeaway" class="btn btn-success m-2">Konfirmasi</button>
            </div>
        </center>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>

@endsection
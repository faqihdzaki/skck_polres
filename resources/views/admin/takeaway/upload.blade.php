@extends('layouts.admin-master')

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
            <form action="{{ route('admin.takeawaypayment',['id'=>$takeaway[0]->id]) }}" method="post" enctype="multipart/form-data" id="takeaway">
              @csrf
              <input type="file" class="form-control m-2" name="takeaway_payment" style="width:50%; height: 350px" id="">
              <input type="submit" name="manual" id="takeaway" class="btn btn-success m-2" value="Konfirm">
            </form>
          </div>
        </center>
      </div>
    </div>
  </div>
  </div>
</section>

@endsection
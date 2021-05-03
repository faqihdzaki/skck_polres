@extends('layouts.admin-master-new')

@section('title')
Dashboard
@endsection

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="JS/jquery.cycle.all.js"></script>
<script type="text/javascript"></script>
<section class="section">
  <div class="section-header">
    <h1>SKCK DELIVERY</h1>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">

          <form action="{{route('admin.deliverystore')}}" method="post" enctype="multipart/form-data" id="delivery">
            @csrf
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="form-group">
                <h6>SKCK DILEVERY adalah Pelayanan Khusus yang kami berikan untuk teman teman disabilitas yang ada, silahkan isi form berikut 
                untuk mendapatkan pelayanan SKCK Delivery dimana kami akan mendatangi tempat anda dan membantu untuk permohonan SKCK. ada juga 
                jika ada mampu untuk mengisi form sendiri, silahkan klik button Form.</h6>
                  <label>Nama</label>
                  <input type="text" name="name" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Alamat Rumah</label>
                  <textarea type="text" name="address" class="form-control" required value=""></textarea>
                </div>
                <div class="form-group">
                  <label>Nomor Telephone</label>
                  <input type="text" name="no_telp" class="form-control" required value="">
                </div><br>
                <small style="color:#A9A9A9">*Jika Ingin Mengisi Form Sendiri Silahkan Klik Button Isi Form</small><br>
            </div>
            <div class="card-footer text-right">
              <a href="{{route('admin.SKCKForm')}}" class="btn btn-icon icon-right btn-info">Form</a>
              <button form="delivery" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
</div>
@endsection
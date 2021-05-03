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
    <h1>Take Away</h1>
  </div>

  <form action="" method="post" enctype="multipart/form-data" id="takeaway">
    @csrf    
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <h4>Take Away</h4>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Keperluan</label>
                <br>
                <small style="color:#A9A9A9">*Silahkan sebutkan alasan ingin melakukan perpanjangan</small><br>
                <textarea type="text" name="reason" class="form-control" required value=""></textarea>
              </div>              
              <div class="form-group">
                <label>Upload gambar SKCK Lama</label>
                <input type="file" class="form-control" name="skck_takeaway_image" id="" >
              </div>
              <div class="form-group">
                <label>Upload gambar KTP</label><br>                
                <input type="file" class="form-control" name="ktp_takeaway_image" id="" >
              </div>
              <div class="form-group">
                <label>Upload Akte Lahir/Kenal Lahir/ijazah Terakhir 1 Lembar</label><br>                
                <input type="file" class="form-control" name="ktp_takeaway_image" id="" >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button class="btn btn-primary mr-1" type="submit" form="takeaway">SUBMIT</button>
  </form>

  </div>
  </div>
</section>
</div>


@endsection
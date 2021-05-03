@extends('layouts.admin-master')

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

  <form action="{{ route('admin.statustakeaway',['id'=>$takeaway[0]->id]) }}" method="post" enctype="multipart/form-data" id="takeaway">
    @csrf    
    @method('PATCH')
    <input type="hidden" name="status" class="form-control"  value="DATA DI KONFIRMASI">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <h4>Take Away</h4>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Alasan</label>
                <br>
                <small style="color:#A9A9A9">*Silahkan sebutkan alasan ingin melakukan perpanjangan</small><br>
                <textarea type="text" name="reason" class="form-control" required value="">{{$takeaway[0]->reason}}</textarea>
              </div>              
              <div class="form-group">
                <label>SKCK Lama</label><br>
                <img src="{{ asset('/storage/'.$takeaway[0]->skck_image) }}" alt="" style="height:200px;"><br><br>                
              </div>
              <div class="form-group">
                <label>KTP</label><br>                
                <img src="{{ asset('/storage/'.$takeaway[0]->ktp_image) }}" alt="" style="height:200px;"><br><br>
              </div>
               <div class="form-group">
                <label>Bukti Pembayran</label><br>                
                <img src="{{ asset('/storage/'.$takeaway[0]->payment_image) }}" alt="" style="height:500px;"><br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button class="btn btn-primary mr-1" type="submit" form="takeaway">KONFIRMASI</button>
  </form>

  </div>
  </div>
</section>
</div>

@endsection
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
    <h1>Data Delivery</h1>
  </div>

  <form action="" method="post" enctype="multipart/form-data" id="">
    @csrf    
    @method('PATCH')
    <input type="hidden" name="status" class="form-control"  value="DATA DI KONFIRMASI">
    <div class="col-md-12">
      <div class="card">
      <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Nama</label>
                <br>                
                <input type="text" name="name" class="form-control" required value="{{$delivery['0']->name}}"></p>
              </div>
              <div class="form-group">
                <label>Address </label>
                <textarea type="text" name="address" class="form-control" required value="">{{$delivery['0']->address}}</textarea>
              </div>
              <div class="form-group">
                <label>No Telephone</label><br>                
                <input type="text" name="no_telp" class="form-control" required value="{{$delivery['0']->no_telp}}"></p>
              </div>
            </div>
          </div>
      </div>
    </div>

    
  </form>

  </div>
  </div>
</section>
</div>

@endsection
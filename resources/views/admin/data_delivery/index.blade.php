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

  <section class="content">
    <div class="container-float">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <!-- <a href="" class="btn btn-success">Tambah</a> -->
              <h4><a href="" class=""> </a></h4>
              <div class="card-header-form float-right">
                <form method="get" action="{{Route('admin.caridatadelivery')}}">
                  <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="cari" value="{{ old('cari') }}">
                    <div class="input-group-btn">
                      <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="card-body">
              <table class="table table-striped table-responsive">
                <thead>
                  <tr>
                    <th style="width: 100px">No</th>
                    <th style="width: 850px" text-align="center">User Name</th>                                        
                    <th style="width: 850px" text-align="center">Email</th> 
                    <th style="width: 650px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  @foreach($delivery as $r)                 
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$r->user_name}}</td>                    
                    <td>{{$r->user_email}} </td> 
                    <td>                      
                      <a href="{{Route('admin.datadeliveryshow')}}/{{ $r->id }}" class="m-1 badge bg-info text-white">View</a>
                      <a href="{{Route('admin.datadeliverydelete')}}/{{ $r->id }}" class="m-1 badge bg-danger text-white delete" id="">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table><br>
            </div>
          </div>
        </div>
  </section>

  <div class="section-body">
  </div>
</section>
@endsection
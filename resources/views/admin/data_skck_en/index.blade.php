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
    <h1>Data SKCK EN</h1>
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
                <form method="get" action="">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{$search??''}}">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
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
                    
                    <th style="width: 850px" text-align="center">Status</th>
                    <th style="width: 650px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  @foreach($skckform_en as $r)                 
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ \DB::table('users')->where('id', $r->user_id)->first()->name??'' }}</td>                    
                    <td><?php 
                  $nik = $r->status;
                  if($nik==null){
                    echo '<span class="badge badge-warning">'."DATA BELUM DI KONFIRMASI".'</span>';
                    }else{
                    echo '<span class="badge badge-success">'.$r->status.'</span>';
                    }
                  ?></td> 
                    <td>
                      <a href="{{Route('admin.dataskcenkedit')}}/{{ $r->id }}" class="m-1 badge bg-primary text-white">Edit</a>
                      <a href="{{Route('admin.dataskcenkshow')}}/{{ $r->id }}" class="m-1 badge bg-info text-white">View</a>
                      <a href="{{Route('admin.dataskcenkdelete')}}/{{ $r->id }}" class="m-1 badge bg-danger text-white delete" id="">Delete</a>
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
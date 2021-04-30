@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>PENDIDIKAN</h1>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row mt-4">
            <div class="col-12 col-lg-8 offset-lg-2">

            <div class="wizard-steps">
                <div class="wizard-step">
                  <div class="wizard-step-icon">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="wizard-step-label">
                    Data Pribadi
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-users"></i>
                  </div>
                  <div class="wizard-step-label">
                    Hubungan Keluarga
                  </div>
                </div>

                <div class="wizard-step wizard-step-active">
                  <div class="wizard-step-icon">
                  <i class="fas fa-graduation-cap"></i>
                  </div>
                  <div class="wizard-step-label">
                    Pendidikan
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-gavel"></i>
                  </div>
                  <div class="wizard-step-label">
                    Perkara Pidana
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-info-circle"></i>
                  </div>
                  <div class="wizard-step-label">
                   Informasi Lain
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-paperclip"></i>
                  </div>
                  <div class="wizard-step-label">
                  Lampiran
                  </div>
                </div>              
              </div>
            </div>
          </div>

         

    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <p>Riwayat Sekolah</p>
          </div>
          <div class="owl-carousel owl-theme" id="products-carousel">
            <form method="POST" action="{{route('admin.offense')}}" style="width:100%" id="school">
              @csrf
              <div class="row ">
                <div class="col-sm-9">
                  <label>Sekolah</label>
                  <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>
                <div class="col-sm-3">
                  <label>Tahun Lulus</label>
                  <input type="text" name="year" class="form-control" required placeholder="" value="">
                </div>
              </div><br>

              <div class="">
                <div class="form-group">
                  <div id="add">
                  </div>
                </div>
              </div>

              <div class="">
                <div class="form-group">
                  <div>
                    <a class="btn btn-success m-1 text-white" id="add" onclick="add()">Tambah</a>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
            <a href= "{{route('admin.couple')}}"class="btn btn-secondary" type="reset">KEMBALI</a>
            <!-- <a href= "{{route('admin.offense')}}" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a> -->
            <button form="school" class="btn btn-primary">Next</button>
          </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

  </div>
  </div>
</section>



<script>
  function tambah() {
    var html = `<div class="">
                <div class="row">
                <div class="col-sm-4">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>

                <div class="col-sm-1">
                <label>Umur</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>

                <div class="col-sm-7">
                <label>Alamat</label>
                <textarea type="text" name="name" class="form-control" required placeholder="" value=""></textarea>
                </div> 
                </div>
                <a type="button" class="btn btn-danger m-2 text-white delete-button">Delete</a>
                </div>
                </div>`;
    var e = document.getElementById("add-product");
    e.innerHTML += html;
    refreshEvent()
  }

  function refreshEvent() {
    document.querySelectorAll('.delete-button').forEach(elem => {
      elem.addEventListener('click', function(e) {
        e.target.parentElement.remove();
      })
    })
  }
</script>

<script>
  function add() {
    var html = `<div class="">
                <div class="row">
                <div class="col-sm-9">
                <label>Sekolah</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>

                <div class="col-sm-3">
                <label>Tahun Lulus</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>
                </div>
                <a type="button" class="btn btn-danger m-2 text-white delete-button">Delete</a>
                </div>
                </div>`;
    var e = document.getElementById("add");
    e.innerHTML += html;
    refreshEvent()
  }

  function refreshEvent() {
    document.querySelectorAll('.delete-button').forEach(elem => {
      elem.addEventListener('click', function(e) {
        e.target.parentElement.remove();
      })
    })
  }
</script>
@endsection
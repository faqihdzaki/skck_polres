@extends('layouts.admin-master-new')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>LAMPIRAN</h1>
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

                <div class="wizard-step">
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

                <div class="wizard-step wizard-step-active">
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


          <div class="card-header">
            <h4>IV.LAMPIRAN</h4>
          </div>
          <div class="card-body">
          <form action="{{route('admin.skckstore')}}" method="post" enctype="multipart/form-data" id="image">
          @csrf
            <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
                <br>
                <label>KK</label><br>
                <input type="file" class="form-control" name="kk_image">
              </div>
              <div class="form-group">
                <br>
                <label>KTP</label><br>
                <input type="file" class="form-control" name="ktp_image">
              </div>
              <div class="form-group">
                <br>
                <label>Foto</label><br>
                <small style="color:#A9A9A9">*4x6 Background Merah, 6 lebar</small><br>
                <input type="file" class="form-control" name="your_image">
              </div>
              <div class="form-group">
                <br>
                <label>Sidik Jari</label><br>
                <small style="color:#A9A9A9">*Kosongi data jika tidak ada</small>
                <input type="file" class="form-control" name="fingerprint_image">
              </div>
            </div>
            <div class="card-footer text-right">
              <a href="{{route('admin.other')}}" class="btn btn-secondary" type="reset">KEMBALI</a>
              <button form="image" class="btn btn-primary">Next</button>
            </div>
          </form>
          </div>
        </div>

      </div>
    </div>
</section>

@endsection
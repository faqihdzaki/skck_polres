@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>INFORMASI LAIN</h1>
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

                <div class="wizard-step wizard-step-active">
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


          <div class="card-header">
            <h4>III.INFORMASI LAIN</h4>
          </div>
          <div class="card-body">
          <form action="{{route('admin.attachment')}}" method="post" enctype="multipart/form-data" id="information">
          @csrf
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Riwayat Pekerjaan / negara - negara yang pernah dikunjungi?</label>
                <br>
                <small style="color:#A9A9A9">*Sebutkan tahun berapa,dalam rangka apa dan negara mana yang di kunjungi</small><br>
                <textarea type="text" name="profession_history" class="form-control" required value=""></textarea>
              </div>
              <div class="form-group">
                <label>Kesenangan/Kegemaran/Hobi </label>
                <textarea type="text" name="hoby" class="form-control" required value=""></textarea>
              </div>
              <div class="form-group">
                <label>Alamat yang mudah di hubungi</label><br>
                <small style="color:#A9A9A9">*Nomor HP</small><br>
                <input type="text" name="address" class="form-control" required value=""></input>
              </div>
            </div>
            <div class="card-footer text-right">
              <a href="{{route('admin.offense')}}" class="btn btn-secondary" type="reset">KEMBALI</a>
              <!-- <a href="{{route('admin.attachment')}}" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a> -->
              <button form="information" class="btn btn-primary">Next</button>
            </div>
          </form>
          </div>
        </div>

      </div>
    </div>
</section>

@endsection
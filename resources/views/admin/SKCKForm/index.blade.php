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
    <h1>DATA DIRI</h1>

  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row mt-4">
            <div class="col-12 col-lg-8 offset-lg-2">

            <div class="wizard-steps">
                <div class="wizard-step wizard-step-active">
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

          <form action="{{route('admin.couple')}}" method="post" enctype="multipart/form-data" id="skck">
            @csrf
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="name" class="form-control" required value="">
                </div>
                <div class="row ">
                <div class="col-sm-6">
                  <label>Tempat</label>
                  <input type="text" name="born" class="form-control" required value="">
                </div>
                <div class="col-sm-6">
                  <label>Tanggal lahir </label>
                  <input type="date" name="date" class="form-control" required value="2021-12-31">
                </div>
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select name="relegion" id="for_member" class="form-control" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen" selected>Kristen</option>
                    <option value="Budha" selected>Budha</option>
                    <option value="Hindu" selected>Hindu</option>
                    <option value="Konghucu" selected>Konghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kebangsaan</label>
                  <input type="text" name="nationality" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="gender" id="for_member" class="form-control" required>
                    <option value="Laki-Laki">Laki_Laki</option>
                    <option value="Perempuan" selected>Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="profession" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Alamat Sekarang</label>
                  <textarea type="text" name="address" class="form-control" required value=""></textarea>
                </div>
                <div class="form-group">
                  <label>Nomor Kartu Penduduk</label>
                  <input type="text" name="nik" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Nomor Passport</label>
                  <input type="text" name="no_passport" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>No. KITAS/KITAP</label>
                  <input type="text" name="no_kita_kitap" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Nomor Telp./Hp</label>
                  <input type="text" name="no_telp" class="form-control" required value="">
                </div>
              </div>
            </div>
            <div class="card-footer text-right">
              <!-- <a href="{{route('admin.couple')}}" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a> -->
              <button form="skck" class="btn btn-primary">Next</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
</div>
@endsection
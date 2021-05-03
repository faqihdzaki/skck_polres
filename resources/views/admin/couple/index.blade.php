@extends('layouts.admin-master-new')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>HUBUNGAN KELUARGA</h1>
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

                <div class="wizard-step wizard-step-active">
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
        </div>
      </div>
    </div>
  </div>

  <form action="{{route('admin.school')}}" method="post" enctype="multipart/form-data" id="family">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <h4>Menerangkan hal-hal sebagai jawaban/keterangan atas pernyataan - pertanyaan diajukan sebagai berikut :</h4>
            </div>
            <div class="card-header">
              <h4>I. Hubungan Kekeluargaan</h4>
            </div>
            <div class="card-header">
              <p>1. Istri/Suami</p>
            </div>
            <div class="card-body">
              <h9 style="color:#A9A9A9">*jika form yang anda isi tidak ada jawabannya, isi dengan "-"</h9>
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="couple_name" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Umur </label>
                  <input type="text" name="couple_age" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select name="couple_relegion" id="for_member" class="form-control" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen" selected>Kristen</option>
                    <option value="Budha" selected>Budha</option>
                    <option value="Hindu" selected>Hindu</option>
                    <option value="Konghucu" selected>Konghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kebangsaan</label>
                  <input type="text" name="couple_nationality" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="couple_profession" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="couple_address" class="form-control" required value="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <p>2. Bapak</p>
            </div>
            <div class="card-body">
            <h9 style="color:#A9A9A9">*Tulis (Alm) jika Bapak Sudah Meninggal, lalu isi form dengan tanda "-"</h9>
              <div class="owl-carousel owl-theme" id="products-carousel">

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="father_name" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Umur </label>
                  <input type="text" name="father_age" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select name="father_relegion" id="for_member" class="form-control" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen" selected>Kristen</option>
                    <option value="Budha" selected>Budha</option>
                    <option value="Hindu" selected>Hindu</option>
                    <option value="Konghucu" selected>Konghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kebangsaan</label>
                  <input type="text" name="father_nationality" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="father_profession" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="father_address" class="form-control" required value="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <p>3. Ibu</p>
            </div>
            <div class="card-body">
            <h9 style="color:#A9A9A9">*Tulis (Alm) jika Ibu Sudah Meninggal, lalu isi form dengan tanda "-"</h9>
              <div class="owl-carousel owl-theme" id="products-carousel">

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="mother_name" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Umur </label>
                  <input type="text" name="mother_age" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select name="mother_relegion" id="for_member" class="form-control" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen" selected>Kristen</option>
                    <option value="Budha" selected>Budha</option>
                    <option value="Hindu" selected>Hindu</option>
                    <option value="Konghucu" selected>Konghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kebangsaan</label>
                  <input type="text" name="mother_nationality" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="mother_profession" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="mother_address" class="form-control" required value="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <p>4. Saudara Sekandung/Tiri</p>
            </div>
            <div class="card-body">
            <h9 style="color:#A9A9A9">*jika form yang anda isi tidak ada jawabannya, isi dengan "-"</h9>
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="row ">
                  <div class="col-sm-4">
                    <label>Nama</label>
                    <input type="text" name="sibling_name" class="form-control" required placeholder="" value="">
                  </div>
                  <div class="col-sm-1">
                    <label>Umur</label>
                    <input type="text" name="sibling_age" class="form-control" required placeholder="" value="">
                  </div>
                  <div class="col-sm-3">
                    <label>Pekerjaan</label>
                    <input type="text" name="sibling_occupation" class="form-control" required placeholder="" value="">
                  </div>
                  <div class="col-sm-4">
                    <label>Alamat</label>
                    <textarea type="text" name="sibling_address" class="form-control" required placeholder="" value=""></textarea>
                  </div>
                </div><br>
                <div class="">
                  <div class="form-group">
                    <div id="add-product">
                  </div>
                </div>
              </div>
              <div class="">
                <div class="form-group">
                  <div>
                    <a class="btn btn-success m-1 text-white" id="tambah" onclick="tambah()">Tambah</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-right">
            </div>
          </div>
        </div>
        <div class="card-footer text-right">
          <a href="{{route('admin.SKCKForm')}}" class="btn btn-secondary" type="reset" href="">KEMBALI</a>
          <!-- <a href="{{route('admin.school')}}" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a> -->
          <button form="family" class="btn btn-primary">Next</button>
        </div>
      </div>
  </form>

  </div>
  </div>
</section>
</div>







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

                <div class="col-sm-3">
                    <label>Pekerjaan</label>
                    <input type="text" name="sibling_occupation" class="form-control" required placeholder="" value="">
                  </div>
                  
                  <div class="col-sm-4">
                    <label>Alamat</label>
                    <textarea type="text" name="sibling_address" class="form-control" required placeholder="" value=""></textarea>
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
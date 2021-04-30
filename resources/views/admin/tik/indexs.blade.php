@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<link href="https://skck.polri.go.id/skckonline/assets/plugins/famfamflags/famfamfam-flags.min.css" rel="stylesheet">
<section class="section">
  <div class="section-header">
    <h1>KARTU Tik</h1>
  </div>


  <div class="row">
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">
          <h5>Yang bertanda tangan di bawah ini:</h5>
        </div>
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
            <div class="form-group">
              <label>Alias </label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
            <div class="form-group">
              <label>Agama </label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <h5>Foto</h5>
        </div>
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label></label>
              <input type="file" name="name" class="form-control" required value="" style="height: 240px;">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label>Tanggal Lahir/Umur</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label>Perubahan Alamat</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label>Kedudukan dalam keluarga</label>
              <input style="height: 110px;" type="text" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="row ">
              <div class="col-sm-6">
                <label>Nama Bapak</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
              </div>
              <div class="col-sm-6">
                <label>Nama ibu</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
              </div>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label>Pekerjaan</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="row ">
              <div class="col-sm-9">
                <label>Nama Suami/Istri</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
              </div>
              <div class="col-sm-3">
                <label>Usia</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
              </div>
              <div class="col-sm-9">
                <label>Nama Bapak Suami/Istri</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
              </div>
              <div class="col-sm-3">
                <label>Usia</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
              </div>
              <div class="col-sm-9">
                <label>Nama Ibu Suami/Istri</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
              </div>
              <div class="col-sm-3">
                <label>Usia</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
              </div>
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label>Sanak/Saudara Yang menjadi tanggungan </label>
              <input style="height: 160px;" type="text" name="name" class="form-control" required value="">
            </div>
            <div class="form-group">
              <label>Alamaat</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <form method="POST" action="" style="width:100%">
              @csrf
              <div class="row ">
                <div class="col-sm-10">
                  <label>Anak-anak</label>
                  <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>
                <div class="col-sm-2">
                  <label>Umur</label>
                  <input type="text" name="name" class="form-control" required placeholder="" value="">
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
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <h8>Ciri-ciri Badan</h8>
            <div class="row ">
              <div class="col-sm-2">
                <label>Rambut</label>
                <input type="text" name="name" class="form-control" required value="">
              </div>
              <div class="col-sm-2">
                <label>Muka</label>
                <input type="text" name="name" class="form-control" required value="">
              </div>
              <div class="col-sm-3">
                <label>Kulit</label>
                <input type="text" name="name" class="form-control" required value="">
              </div>
              <div class="col-sm-2">
                <label>Tinggi</label>
                <input type="text" name="name" class="form-control" required value="">
              </div>
              <div class="col-sm-3">
                <label>Tanda Isitimewa</label>
                <input type="text" name="name" class="form-control" required value="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label>rumus sidik jari</label>
              <input type="file" name="name" class="form-control" required value="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <form method="POST" action="" style="width:100%">
              @csrf
              <div class="row ">
                <div class="col-sm-9">
                  <label>Riwayat Sekolah</label>
                  <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>
                <div class="col-sm-3">
                  <label>Tahun Lulus</label>
                  <input type="text" name="name" class="form-control" required placeholder="" value="">
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
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="form-group">
              <label>Kesenangan/Kegemaran/Hobi</label>
              <input type="text" name="name" class="form-control" required value="">
            </div>
            <div class="form-group">
              <label>Catatan Kriminal Yang ada</label>
              <textarea type="text" name="name" class="form-control" required value=""></textarea>
            </div>
            <div class="form-group">
              <label>Data/Keterangan-keterangan lain</label>
              <textarea type="text" name="name" class="form-control" required value=""></textarea>
            </div>
          </div>
          <div class="card-footer text-right">
              <button form="skck" class="btn btn-primary">Submit</button>
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
                <div class="col-sm-10">
                <label>Anak-anak</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>

                <div class="col-sm-2">
                <label>Umur</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
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
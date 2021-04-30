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
    <h1>Show</h1>
  </div>
  <form action="{{ route('admin.status',['id'=>$skckform->id]) }}" method="post" enctype="multipart/form-data" id="status">
    @csrf
    @method('PATCH')
    <input type="hidden" name="status" class="form-control" value="DATA DI KONFIRMASI">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5>Yang bertanda tangan di bawah ini:</h5>
          </div>

          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="row ">
                <div class="col-sm-6">

                  <label>Nama</label>
                  <input type="text" name="name" class="form-control" value="{{$skckform->name}}">
                </div>
                <div class="col-sm-6">
                  <label>Tempat</label>
                  <input type="text" name="name" class="form-control" value="{{$skckform->born}}">
                </div>
                <div class="col-sm-6">
                  <label>Tanggal lahir</label>
                  <input type="date" name="" class="form-control" value="{{$skckform->date}}">
                </div>
                <div class="col-sm-6">
                  <label>Agama</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$skckform->relegion}}">
                </div>
                <div class="col-sm-6">
                  <label>Kebangsaan</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$skckform->nationality}}">
                </div>
                <div class="col-sm-6">
                  <label>Jenis Kelamin</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$skckform->gender}}">
                </div>
                <div class="col-sm-6">
                  <label>Pekerjaan</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$skckform->profession}}">
                </div>
                <div class="col-sm-6">
                  <label>Alamat Sekarang</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$skckform->address}}">
                </div>
                <div class="col-sm-6">
                  <label>Nomor Kartu Penduduk</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$skckform->nik}}">
                </div>
                <div class="col-sm-6">
                  <label>Nomor Passpor</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$skckform->no_passport}}">
                </div>
                <div class="col-sm-6">
                  <label>No. KITAS/KITAP</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$skckform->no_kita_kitap}}">
                </div>
                <div class="col-sm-6">
                  <label>Nomor Telp./Hp</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$skckform->no_telp}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <h4>I. Hubungan Kekeluargaan</h4>
            </div>
            <div class="card-header">
              <p>1. Istri/Suami</p>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="name" class="form-control" value="{{$couple['0']->name}}">
                </div>
                <div class="form-group">
                  <label>Umur </label>
                  <input type="text" name="name" class="form-control" value="{{$couple['0']->age}}">
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <input type="text" name="name" class="form-control" value="{{$couple['0']->relegion}}">
                </div>
                <div class="form-group">
                  <label>Kebangsaan</label>
                  <input type="text" name="name" class="form-control" value="{{$couple['0']->nationality}}">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="name" class="form-control" value="{{$couple['0']->profession}}">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="name" class="form-control" value="{{$couple['0']->address}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <p>2. Bapak</p>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="name" class="form-control" value="{{$father['0']->name}}">
                </div>
                <div class="form-group">
                  <label>Umur </label>
                  <input type="text" name="name" class="form-control" value="{{$father['0']->age}}">
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <input type="text" name="name" class="form-control" value="{{$father['0']->relegion}}">
                </div>
                <div class="form-group">
                  <label>Kebangsaan</label>
                  <input type="text" name="name" class="form-control" value="{{$father['0']->nationality}}">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="name" class="form-control" value="{{$father['0']->profession}}">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="name" class="form-control" value="{{$father['0']->address}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <p>3. Ibu</p>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="name" class="form-control" value="{{$mother['0']->name}}">
                </div>
                <div class="form-group">
                  <label>Umur </label>
                  <input type="text" name="name" class="form-control" value="{{$mother['0']->age}}">
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <input type="text" name="name" class="form-control" value="{{$mother['0']->relegion}}">
                </div>
                <div class="form-group">
                  <label>Kebangsaan</label>
                  <input type="text" name="name" class="form-control" value="{{$mother['0']->nationality}}">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="name" class="form-control" value="{{$mother['0']->profession}}">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="name" class="form-control" value="{{$mother['0']->address}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <p>4. Saudara Sekandung/Tiri</p>
            </div>
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="row ">
                <div class="col-sm-4">
                  <label>Nama</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$sibling['0']->name}}">
                </div>
                <div class="col-sm-2">
                  <label>Umur</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$sibling['0']->age}}">
                </div>
                <div class="col-sm-6">
                  <label>Alamat</label>
                  <textarea type="text" name="name" class="form-control" placeholder="" value="">{{$sibling['0']->address}}</textarea>
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
                    <!-- <a class="btn btn-success m-1 text-white" id="tambah" onclick="tambah()">Tambah</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <p>5. Riwayat Sekolah</p>
            </div>
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="row ">
                <div class="col-sm-9">
                  <label>Sekolah</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$school['0']->name}}">
                </div>
                <div class="col-sm-3">
                  <label>Tahun Lulus</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="{{$school['0']->year}}">
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
                    <!-- <a class="btn btn-success m-1 text-white" id="add" onclick="add()">Tambah</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>II.Tersangkut Perkara Pidana dan Pelanggaran</h4>
          </div>
          <div class="card-header">
            <p>1. Perkara Pidana</p>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Apakah Saudara Pernah tersangkut perkara pidana?</label>
              <input type="text" name="name" class="form-control" value="{{$case['0']->case_1}}">
            </div>
            <div class="form-group">
              <label>Dalam Perkara apa? </label>
              <textarea type="text" name="name" class="form-control" value="">{{$case['0']->case_2}}</textarea>
            </div>
            <div class="form-group">
              <label>Bagaimana putusan dan Vonis hakim? </label>
              <textarea type="text" name="name" class="form-control" value="">{{$case['0']->case_3}}</textarea>
            </div>
            <div class="form-group">
              <label>Apakah Saudara sedang dalam proses perkara pidana? Kasus Apa? </label>
              <textarea type="text" name="name" class="form-control" value="">{{$case['0']->case_4}}</textarea>
            </div>
            <div class="form-group">
              <label>Sampai sejauh mana proses hukumnya?</label>
              <input type="text" name="name" class="form-control" value="{{$case['0']->case_5}}"></input>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4></h4>
          </div>
          <div class="card-header">
            <p>2. Pelanggaran</p>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Apakah Saudara Pernah melakukan pelanggaran hukum dan atau norma norma sosail?</label>
              <input type="text" name="name" class="form-control" value="{{$offense['0']->offense_1}}">
            </div>
            <div class="form-group">
              <label>Pelanggaran hukum atau norma-norma sosial apa? </label>
              <textarea type="text" style="height: 233px;" name="name" class="form-control" value="">{{$offense['0']->offense_2}}</textarea>
            </div>
            <div class="form-group">
              <label>Sampai sejauh mana prosesnya?</label>
              <input type="text" name="name" class="form-control" value="{{$offense['0']->offense_3}}"></input>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <h4>III.INFORMASI LAIN</h4>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="form-group">
                  <label>Riwayat Pekerjaan / negara - negara yang pernah dikunjungi?</label>
                  <br>
                  <small style="color:#A9A9A9">*Sebutkan tahun berapa,dalam rangka apa dan negara mana yang di kunjungi</small><br>
                  <textarea type="text" name="name" class="form-control" value="">{{$orther_infromation['0']-> profession_history}}</textarea>
                </div>
                <div class="form-group">
                  <label>Kesenangan/Kegemaran/Hobi </label>
                  <textarea type="text" name="name" class="form-control" value="">{{$orther_infromation['0']-> hoby}}</textarea>
                </div>
                <div class="form-group">
                  <label>Alamat yang mudah di hubungi</label><br>
                  <small style="color:#A9A9A9">*Nomor HP</small><br>
                  <input type="text" name="name" class="form-control" value="{{$orther_infromation['0']-> address}}"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <h4>IV.Lampiran</h4>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="card-body">
                  <div class="gallery gallery-fw" data-item-height="37">
                    <p>KK</p>
                    <img src="{{ asset('/storage/'.$skckform->kk_image) }}" alt="" style="height:200px;"><br><br>
                    <p>KTP</p>
                    <img src="{{ asset('/storage/'.$skckform->ktp_image) }}" alt="" style="height:200px;"><br><br>
                    <p>Foto</p>
                    <img src="{{ asset('/storage/'.$skckform->your_image) }}" alt="" style="height:200px;"><br><br>
                    <p>Foto</p>
                    <img src="{{ asset('/storage/'.$skckform->fingerprint_image) }}" alt="" style="height:200px;"><br><br>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <button class="btn btn-primary mr-1" type="submit" form="status">Konfirmasi</button>
    </div>
  </form>

  <script>
    function tambah() {
      var html = `<div class="">
                <div class="row">
                <div class="col-sm-4">
                <label>Nama</label>
                <input type="text" name="name" class="form-control"  placeholder="" value="">
                </div>

                <div class="col-sm-1">
                <label>Umur</label>
                <input type="text" name="name" class="form-control"  placeholder="" value="">
                </div>

                <div class="col-sm-7">
                <label>Alamat</label>
                <textarea type="text" name="name" class="form-control"  placeholder="" value=""></textarea>
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
                <input type="text" name="name" class="form-control"  placeholder="" value="">
                </div>

                <div class="col-sm-3">
                <label>Tahun Lulus</label>
                <input type="text" name="name" class="form-control"  placeholder="" value="">
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
  <link rel="stylesheet" href="yearpicker.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="yearpicker.js" async></script>
  @endsection
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
    <h1>Edit</h1>
  </div>

  <form action="{{ route('admin.update',['id'=>$skckform->id]) }}" method="post" enctype="multipart/form-data" id="skck">
    @csrf
    @method('PATCH')
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <h4>Yang bertanda tangan di bawah ini:</h4>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">

              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="skck_name" class="form-control" required value="{{$skckform->name}}">
              </div>
              <div class="row ">
                <div class="col-sm-6">
                  <label>Tempat</label>
                  <input type="text" name="skck_born" class="form-control" required value="{{$skckform->born}}">
                </div>
                <div class="col-sm-6">
                  <label>Tanggal lahir </label>
                  <input type="date" name="skck_date" class="form-control" required value="{{$skckform->date}}">
                </div>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select name="skck_relegion" id="for_member" class="form-control" required>
                  <option value="{{$skckform->relegion}}">{{$skckform->relegion}}</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kebangsaan</label>
                <input type="text" name="skck_nationality" class="form-control" required value="{{$skckform->nationality}}">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-group">
                  <select name="skck_gender" id="for_member" class="form-control" required>
                    <option value="{{$skckform->gender}}">{{$skckform->gender}}</option>
                    <option value="Laki-Laki">Laki_Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="skck_profession" class="form-control" required value="{{$skckform->profession}}">
              </div>
              <div class="form-group">
                <label>Alamat Sekarang</label>
                <input type="text" name="skck_address" class="form-control" required value="{{$skckform->address}}">
              </div>
              <div class="form-group">
                <label>Nomor Kartu Penduduk</label>
                <input type="text" name="skck_nik" class="form-control" required value="{{$skckform->nik}}">
              </div>
              <div class="form-group">
                <label>Nomor Passport</label>
                <input type="text" name="skck_no_passport" class="form-control" required value="{{$skckform->no_passport}}">
              </div>
              <div class="form-group">
                <label>No. KITAS/KITAP</label>
                <input type="text" name="skck_no_kita_kitap" class="form-control" required value="{{$skckform->no_kita_kitap}}">
              </div>
              <div class="form-group">
                <label>Nomor Telp./Hp</label>
                <input type="text" name="skck_no_telp" class="form-control" required value="{{$skckform->no_telp}}">
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
            <h4>Menerangkan hal-hal sebagai jawaban/keterangan atas pernyataan - pertanyaan diajukan sebagai berikut :</h4>
          </div>
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
                <input type="text" name="couple_name" class="form-control" required value="{{$couple['0']->name}}">
              </div>
              <div class="form-group">
                <label>Umur </label>
                <input type="text" name="couple_age" class="form-control" required value="{{$couple['0']->age}}">
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select name="couple_relegion" id="for_member" class="form-control" required>
                  <option value="{{$skckform->relegion}}">{{$skckform->relegion}}</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kebangsaan</label>
                <input type="text" name="couple_nationality" class="form-control" required value="{{$couple['0']->nationality}}">
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="couple_profession" class="form-control" required value="{{$couple['0']->profession}}">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="couple_address" class="form-control" required value="{{$couple['0']->address}}">
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
            <p>2. Bapak</p>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="father_name" class="form-control" required value="{{$father['0']->name}}">
              </div>
              <div class="form-group">
                <label>Umur </label>
                <input type="text" name="father_age" class="form-control" required value="{{$father['0']->age}}">
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select name="father_relegion" id="for_member" class="form-control" required>
                  <option value="{{$skckform->relegion}}">{{$skckform->relegion}}</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kebangsaan</label>
                <input type="text" name="father_nationality" class="form-control" required value="{{$father['0']->nationality}}">
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="father_profession" class="form-control" required value="{{$father['0']->profession}}">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="father_address" class="form-control" required value="{{$father['0']->address}}">
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
            <p>2. Ibu</p>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="mother_name" class="form-control" required value="{{$mother['0']->name}}">
              </div>
              <div class="form-group">
                <label>Umur </label>
                <input type="text" name="mother_age" class="form-control" required value="{{$mother['0']->age}}">
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select name="mother_relegion" id="for_member" class="form-control" required>
                  <option value="{{$skckform->relegion}}">{{$skckform->relegion}}</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Kebangsaan</label>
                <input type="text" name="mother_nationality" class="form-control" required value="{{$mother['0']->nationality}}">
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="mother_profession" class="form-control" required value="{{$mother['0']->profession}}">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="mother_address" class="form-control" required value="{{$mother['0']->address}}">
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
            <p>4. Saudara Sekandung/Tiri</p>
          </div>
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="row ">
              <div class="col-sm-4">
                <label>Nama</label>
                <input type="text" name="sibling_name" class="form-control" required placeholder="" value="{{$sibling['0']->name}}">
              </div>
              <div class="col-sm-1">
                <label>Umur</label>
                <input type="text" name="sibling_age" class="form-control" required placeholder="" value="{{$sibling['0']->age}}">
              </div>
              <div class="col-sm-7">
                <label>Alamat</label>
                <textarea type="text" name="sibling_address" class="form-control" required placeholder="" value="">{{$sibling['0']->address}}</textarea>
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
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <p>5. Riwayat Sekolah</p>
          </div>
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="row ">
              <div class="col-sm-9">
                <label>Sekolah</label>
                <input type="text" name="school_name" class="form-control" required placeholder="" value="{{$school['0']->name}}">
              </div>
              <div class="col-sm-3">
                <label>Tahun Lulus</label>
                <input type="text" name="school_year" class="form-control" required placeholder="" value="{{$school['0']->year}}">
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
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>II.Tersangkut Perkara Pidana dan Pelanggaran</h4>
          </div>
          <div class="card-header">
            <p>1. Perkara Pidana</p>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Apakah Saudara Pernah tersangkut perkara pidana?</label>
                <input type="text" name="case_1" class="form-control" required value="{{$case['0']->case_1}}">
              </div>
              <div class="form-group">
                <label>Dalam Perkara apa? </label>
                <textarea type="text" name="case_2" class="form-control" required value="">{{$case['0']->case_2}}</textarea>
              </div>
              <div class="form-group">
                <label>Bagaimana putusan dan Vonis hakim? </label>
                <textarea type="text" name="case_3" class="form-control" required value="">{{$case['0']->case_3}}</textarea>
              </div>
              <div class="form-group">
                <label>Apakah Saudara sedang dalam proses perkara pidana? Kasus Apa? </label>
                <textarea type="text" name="case_4" class="form-control" required value="">{{$case['0']->case_4}}</textarea>
              </div>
              <div class="form-group">
                <label>Sampai sejauh mana proses hukumnya?</label>
                <input type="text" name="case_5" class="form-control" required value="{{$case['0']->case_5}}"></input>
              </div>
              <!-- </form> -->
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <p>2. Pelanggaran</p>
          </div>
          <div class="card-body">
            <!-- <form action="" method="post" enctype="multipart/form-data"> -->
            <div class="form-group">
              <label>Apakah Saudara Pernah melakukan pelanggaran hukum dan atau norma norma sosail?</label>
              <input type="text" name="offense_1" class="form-control" required value="{{$offense['0']->offense_1}}">
            </div>
            <div class="form-group">
              <label>Pelanggaran hukum atau norma-norma sosial apa? </label>
              <textarea type="text" name="offense_2" class="form-control" required value="">{{$offense['0']->offense_2}}</textarea>
            </div>
            <div class="form-group">
              <label>Sampai sejauh mana prosesnya?</label>
              <input type="text" name="offense_3" class="form-control" required value="{{$offense['0']->offense_3}}"></input>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
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
                <textarea type="text" name="profession_history" class="form-control" required value="">{{$orther_infromation['0']-> profession_history}}</textarea>
              </div>
              <div class="form-group">
                <label>Kesenangan/Kegemaran/Hobi </label>
                <textarea type="text" name="information_hoby" class="form-control" required value="">{{$orther_infromation['0']->hoby}}</textarea>
              </div>
              <div class="form-group">
                <label>Alamat yang mudah di hubungi</label><br>
                <small style="color:#A9A9A9">*Nomor HP</small><br>
                <input type="text" name="information_no_telp" class="form-control" required value="{{$orther_infromation['0']->address}}"></p>
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
            <h4>IV.Lampiran</h4>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="card-body">
                <div class="gallery gallery-fw" data-item-height="100">
                  <p>KK</p>
                  <img src="{{ asset('/storage/'.$skckform->kk_image) }}" alt="" style="height:200px;"><br><br>
                  <input type="file" name="kk_image" id="" required><br><br>                 
                  <p>KTP</p>
                  <img src="{{ asset('/storage/'.$skckform->ktp_image) }}" alt="" style="height:200px;"><br><br>
                  <input type="file" name="ktp_image" id="" required><br><br>
                  <p>Foto</p>
                  <img src="{{ asset('/storage/'.$skckform->your_image) }}" alt="" style="height:200px;"><br><br>                  
                  <input type="file" name="your_image" id="" required><br><br>
                  <p>Sidik Jari</p>
                  <img src="{{ asset('/storage/'.$skckform->fingerprint_image) }}" alt="" style="height:200px;"><br><br>
                  <input type="file" name="fingerprint_image" id="" required>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary mr-1" type="submit" form="skck">SUBMIT</button>
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
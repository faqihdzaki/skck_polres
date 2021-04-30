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

  <form action="{{ route('admin.update_en',['id'=>$skckform->id]) }}" method="post" enctype="multipart/form-data" id="skck">
    @csrf
    @method('PATCH')
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <h4>The undersigned is:</h4>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">

              <div class="form-group">
                <label>Name</label>
                <input type="text" name="skck_name" class="form-control" required value="{{$skckform->name}}">
              </div>
              <div class="row ">
                <div class="col-sm-6">
                  <label>Place</label>
                  <input type="text" name="skck_born" class="form-control" required value="{{$skckform->born}}">
                </div>
                <div class="col-sm-6">
                  <label>Date of birth </label>
                  <input type="date" name="skck_date" class="form-control" required value="{{$skckform->date}}">
                </div>
              </div>
              <div class="form-group">
                <label>Religion</label>
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
                <label>Nationality</label>
                <input type="text" name="skck_nationality" class="form-control" required value="{{$skckform->nationality}}">
              </div>
              <div class="form-group">
                <label>Gender</label>
                <div class="form-group">
                  <select name="skck_gender" id="for_member" class="form-control" required>
                    <option value="{{$skckform->gender}}">{{$skckform->gender}}</option>
                    <option value="Laki-Laki">Laki_Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Occupation</label>
                <input type="text" name="skck_profession" class="form-control" required value="{{$skckform->profession}}">
              </div>
              <div class="form-group">
                <label>Current Address</label>
                <input type="text" name="skck_address" class="form-control" required value="{{$skckform->address}}">
              </div>              
              <div class="form-group">
                <label>Passport Number</label>
                <input type="text" name="skck_no_passport" class="form-control" required value="{{$skckform->no_passport}}">
              </div>
              <div class="form-group">
                <label>Stay Permit No.</label>
                <input type="text" name="skck_no_kita_kitap" class="form-control" required value="{{$skckform->no_kita_kitap}}">
              </div>
              <div class="form-group">
                <label>Phone Number</label>
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
            <h4>Explain things as answer / explanation for the questions posed as follows :</h4>
          </div>
          <div class="card-header">
            <h4>I. Reletionship</h4>
          </div>
          <div class="card-header">
            <p>1. Wife/Husband</p>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">

              <div class="form-group">
                <label>Name</label>
                <input type="text" name="couple_name" class="form-control" required value="{{$couple['0']->name}}">
              </div>
              <div class="form-group">
                <label>Age </label>
                <input type="text" name="couple_age" class="form-control" required value="{{$couple['0']->age}}">
              </div>
              <div class="form-group">
                <label>Religion</label>
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
                <label>Nationality</label>
                <input type="text" name="couple_nationality" class="form-control" required value="{{$couple['0']->nationality}}">
              </div>
              <div class="form-group">
                <label>Occupation</label>
                <input type="text" name="couple_profession" class="form-control" required value="{{$couple['0']->profession}}">
              </div>
              <div class="form-group">
                <label>Address</label>
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
            <p>2. Father</p>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="father_name" class="form-control" required value="{{$father['0']->name}}">
              </div>
              <div class="form-group">
                <label>Age </label>
                <input type="text" name="father_age" class="form-control" required value="{{$father['0']->age}}">
              </div>
              <div class="form-group">
                <label>Religion</label>
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
                <label>Nationality</label>
                <input type="text" name="father_nationality" class="form-control" required value="{{$father['0']->nationality}}">
              </div>
              <div class="form-group">
                <label>Occupation</label>
                <input type="text" name="father_profession" class="form-control" required value="{{$father['0']->profession}}">
              </div>
              <div class="form-group">
                <label>Address</label>
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
            <p>2. Mother</p>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="mother_name" class="form-control" required value="{{$mother['0']->name}}">
              </div>
              <div class="form-group">
                <label>Age </label>
                <input type="text" name="mother_age" class="form-control" required value="{{$mother['0']->age}}">
              </div>
              <div class="form-group">
                <label>Religion</label>
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
                <label>Nationality</label>
                <input type="text" name="mother_nationality" class="form-control" required value="{{$mother['0']->nationality}}">
              </div>
              <div class="form-group">
                <label>Occupation</label>
                <input type="text" name="mother_profession" class="form-control" required value="{{$mother['0']->profession}}">
              </div>
              <div class="form-group">
                <label>Address</label>
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
            <p>4. Siblings</p>
          </div>
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="row ">
              <div class="col-sm-4">
                <label>Name</label>
                <input type="text" name="sibling_name" class="form-control" required placeholder="" value="{{$sibling['0']->name}}">
              </div>
              <div class="col-sm-1">
                <label>Age</label>
                <input type="text" name="sibling_age" class="form-control" required placeholder="" value="{{$sibling['0']->age}}">
              </div>
              <div class="col-sm-3">
                <label>Address</label>
                <textarea type="text" name="sibling_address" class="form-control" required placeholder="" value="">{{$sibling['0']->address}}</textarea>
              </div>
              <div class="col-sm-4">
                    <label>Occupation</label>
                    <input type="text" name="sibling_occupation" class="form-control" required placeholder="" value="{{$sibling['0']->occupation}}">
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
            <p>5. Education History</p>
          </div>
          <div class="owl-carousel owl-theme" id="products-carousel">
            <div class="row ">
              <div class="col-sm-9">
                <label>School</label>
                <input type="text" name="school_name" class="form-control" required placeholder="" value="{{$school['0']->name}}">
              </div>
              <div class="col-sm-3">
                <label>Year of Graduation</label>
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
            <h4>II.Criminal case Lodged and Abuse</h4>
          </div>
          <div class="card-header">
            <p>1. Criminal case</p>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Have you ever cought in a criminal case</label>
                <input type="text" name="case_1" class="form-control" required value="{{$case['0']->case_1}}">
              </div>
              <div class="form-group">
                <label>In what kind of case? </label>
                <textarea type="text" name="case_2" class="form-control" required value="">{{$case['0']->case_2}}</textarea>
              </div>
              <div class="form-group">
                <label>What is the decision of the judge and verdict? </label>
                <textarea type="text" name="case_3" class="form-control" required value="">{{$case['0']->case_3}}</textarea>
              </div>
              <div class="form-group">
                <label>Are you currently in the process of a criminal case? </label>
                <textarea type="text" name="case_4" class="form-control" required value="">{{$case['0']->case_4}}</textarea>
              </div>
              <div class="form-group">
                <label>To what extent is the legal process?</label>
                <input type="text" name="case_5" class="form-control" required value="{{$case['0']->case_5}}"></input>
              </div>
              <!-- </form> -->
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <p>2. Violation</p>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Have you ever violated the law and social norms or other?</label>
              <input type="text" name="offense_1" class="form-control" required value="{{$offense['0']->offense_1}}">
            </div>
            <div class="form-group">
              <label>What kind of violation of the law?</label>
              <textarea type="text" name="offense_2" class="form-control" required value="">{{$offense['0']->offense_2}}</textarea>
            </div>
            <div class="form-group">
              <label>To what extent is the process?</label>
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
            <h4>III.OTHER INFORMATION</h4>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Work experience and countries you have ever visited before :</label>
                <br>
                <small style="color:#A9A9A9">*State in what year, in what context and which countries were visited</small><br>
                <textarea type="text" name="profession_history" class="form-control" required value="">{{$orther_infromation['0']-> profession_history}}</textarea>
              </div>
              <div class="form-group">
                <label>Pleasure/Fondness/Hobbies</label>
                <textarea type="text" name="information_hoby" class="form-control" required value="">{{$orther_infromation['0']->hoby}}</textarea>
              </div>
              <div class="form-group">
                <label>Contact no. in case of emergency</label><br>
                <small style="color:#A9A9A9">*Phone number</small><br>
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
                  <p>Image</p>
                  <img src="{{ asset('/storage/'.$skckform->your_image) }}" alt="" style="height:200px;"><br><br>                  
                  <input type="file" name="your_image" id="" required><br><br>
                  <p>Finger Print</p>
                  <img src="{{ asset('/storage/'.$skckform->fingerprint_image) }}" alt="" style="height:200px;"><br><br>
                  <input type="file" name="fingerprint_image" id="" required>
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
            <h4>V.Sponsor</h4>
          </div>
          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Sponsored by</label>
                <textarea type="text" name="sponsor_name" class="form-control" required value="">{{$sponsor['0']->name}}</textarea>
              </div>
              <div class="form-group">
                <label>Sponsor Address</label>
                <textarea type="text" name="sponsor_address" class="form-control" required value="">{{$sponsor['0']->address}}</textarea>
              </div>
              <div class="form-group">
                <label>Telp./Fax</label>
                <input type="text" name="sponsor_no_telp" class="form-control" required value="{{$sponsor['0']->no_telp}}"></p>
              </div>
              <div class="form-group">
                <label>Type of Bussiness</label>
                <input type="text" name="sponsor_type" class="form-control" required value="{{$sponsor['0']->type}}"></p>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                <label class="custom-control-label" for="agree">I made the above information in truth on an oath according to my belief,
                  if in the future this information is not true, then I can be sued
                  based on applicable law.</label>
              </div>
            </div>
            <div class="card-footer text-right">
              <!-- <a href="{{Route('admin.dashboard')}}" class="btn btn-success" type="reset" href="">KONFIRMASI DATA</a> -->
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
                <label>Name</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>

                <div class="col-sm-1">
                <label>Age</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>

                <div class="col-sm-7">
                <label>Address</label>
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
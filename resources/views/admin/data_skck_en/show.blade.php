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
  <form action="{{ route('admin.status_en',['id'=>$skckform->id]) }}" method="post" enctype="multipart/form-data" id="status">
  @csrf
    @method('PATCH')
    <input type="hidden" name="status" class="form-control"  value="DATA DI KONFIRMASI">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          <h4>The undersigned is:</h4>
          </div>

          <div class="card-body">
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="row ">
                <div class="col-sm-6">

                  <label>Name</label>
                  <input type="text" name="name" class="form-control"  value="{{$skckform->name}}">
                </div>
                <div class="col-sm-6">
                  <label>Place</label>
                  <input type="text" name="name" class="form-control"  value="{{$skckform->born}}">
                </div>
                <div class="col-sm-6">
                  <label>Date of birth</label>
                  <input type="date" name="" class="form-control"  value="{{$skckform->date}}">
                </div>
                <div class="col-sm-6">
                  <label>Religion</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$skckform->relegion}}">
                </div>
                <div class="col-sm-6">
                  <label>Nationality</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$skckform->nationality}}">
                </div>
                <div class="col-sm-6">
                  <label>Gender</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$skckform->gender}}">
                </div>
                <div class="col-sm-6">
                  <label>Occupation</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$skckform->profession}}">
                </div>
                <div class="col-sm-6">
                  <label>Current Address</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$skckform->address}}">
                </div>                
                <div class="col-sm-6">
                  <label>Passport Number</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$skckform->no_passport}}">
                </div>
                <div class="col-sm-6">
                  <label>Stay Permit No</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$skckform->no_kita_kitap}}">
                </div>
                <div class="col-sm-6">
                  <label>Phone Number</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$skckform->no_telp}}">
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
              <h4>I.Reletionship</h4>
            </div>
            <div class="card-header">
              <p>1. Wife/Husband</p>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control"  value="{{$couple['0']->name}}">
                </div>
                <div class="form-group">
                  <label>Age </label>
                  <input type="text" name="name" class="form-control"  value="{{$couple['0']->age}}">
                </div>
                <div class="form-group">
                  <label>Religion</label>
                  <input type="text" name="name" class="form-control"  value="{{$couple['0']->relegion}}">
                </div>
                <div class="form-group">
                  <label>Nationality</label>
                  <input type="text" name="name" class="form-control"  value="{{$couple['0']->nationality}}">
                </div>
                <div class="form-group">
                  <label>Occupation</label>
                  <input type="text" name="name" class="form-control"  value="{{$couple['0']->profession}}">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="name" class="form-control"  value="{{$couple['0']->address}}">
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
              <p>2.Father</p>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control"  value="{{$father['0']->name}}">
                </div>
                <div class="form-group">
                  <label>Age </label>
                  <input type="text" name="name" class="form-control"  value="{{$father['0']->age}}">
                </div>
                <div class="form-group">
                  <label>Religion</label>
                  <input type="text" name="name" class="form-control"  value="{{$father['0']->relegion}}">
                </div>
                <div class="form-group">
                  <label>Nationality</label>
                  <input type="text" name="name" class="form-control"  value="{{$father['0']->nationality}}">
                </div>
                <div class="form-group">
                  <label>Occupation</label>
                  <input type="text" name="name" class="form-control"  value="{{$father['0']->profession}}">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="name" class="form-control"  value="{{$father['0']->address}}">
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
              <p>3. Mother</p>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control"  value="{{$mother['0']->name}}">
                </div>
                <div class="form-group">
                  <label>Age </label>
                  <input type="text" name="name" class="form-control"  value="{{$mother['0']->age}}">
                </div>
                <div class="form-group">
                  <label>Religion</label>
                  <input type="text" name="name" class="form-control"  value="{{$mother['0']->relegion}}">
                </div>
                <div class="form-group">
                  <label>Nationality</label>
                  <input type="text" name="name" class="form-control"  value="{{$mother['0']->nationality}}">
                </div>
                <div class="form-group">
                  <label>Occupation</label>
                  <input type="text" name="name" class="form-control"  value="{{$mother['0']->profession}}">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="name" class="form-control"  value="{{$mother['0']->address}}">
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
              <p>4. Siblings</p>
            </div>
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="row ">
                <div class="col-sm-4">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$sibling['0']->name}}">
                </div>
                <div class="col-sm-2">
                  <label>Age</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$sibling['0']->age}}">
                </div>
                <div class="col-sm-6">
                  <label>Address</label>
                  <textarea type="text" name="name" class="form-control"  placeholder="" value="">{{$sibling['0']->address}}</textarea>
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
            <p>5. Education History</p>
            </div>
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="row ">
                <div class="col-sm-9">
                  <label>School</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$school['0']->name}}">
                </div>
                <div class="col-sm-3">
                <label>Year of Graduation</label>
                  <input type="text" name="name" class="form-control"  placeholder="" value="{{$school['0']->year}}">
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
          <h4>II.Criminal case Lodged and Abuse</h4>
          </div>
          <div class="card-header">
          <p>1. Criminal case</p>
          </div>
          <div class="card-body">
            <div class="form-group">
            <label>Have you ever cought in a criminal case</label>
              <input type="text" name="name" class="form-control"  value="{{$case['0']->case_1}}">
            </div>
            <div class="form-group">
            <label>In what kind of case? </label>
              <textarea type="text" name="name" class="form-control"  value="">{{$case['0']->case_2}}</textarea>
            </div>
            <div class="form-group">
            <label>What is the decision of the judge and verdict? </label>
              <textarea type="text" name="name" class="form-control"  value="">{{$case['0']->case_3}}</textarea>
            </div>
            <div class="form-group">
            <label>Are you currently in the process of a criminal case? </label>
              <textarea type="text" name="name" class="form-control"  value="">{{$case['0']->case_4}}</textarea>
            </div>
            <div class="form-group">
            <label>To what extent is the legal process?</label>
              <input type="text" name="name" class="form-control"  value="{{$case['0']->case_5}}"></input>
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
          <p>2. Violation</p>
          </div>
          <div class="card-body">
            <div class="form-group">
            <label>Have you ever violated the law and social norms or other?</label>
              <input type="text" name="name" class="form-control"  value="{{$offense['0']->offense_1}}">
            </div>
            <div class="form-group">
            <label>What kind of violation of the law?</label>
              <textarea type="text" style="height: 233px;" name="name" class="form-control"  value="">{{$offense['0']->offense_2}}</textarea>
            </div>
            <div class="form-group">
            <label>To what extent is the process?</label>
              <input type="text" name="name" class="form-control"  value="{{$offense['0']->offense_3}}"></input>
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
                  <textarea type="text" name="name" class="form-control"  value="">{{$orther_infromation['0']-> profession_history}}</textarea>
                </div>
                <div class="form-group">
                <label>Pleasure/Fondness/Hobbies</label>
                  <textarea type="text" name="name" class="form-control"  value="">{{$orther_infromation['0']-> hoby}}</textarea>
                </div>
                <div class="form-group">
                <label>Contact no. in case of emergency</label><br>
                <small style="color:#A9A9A9">*Phone number</small><br>
                  <input type="text" name="name" class="form-control"  value="{{$orther_infromation['0']-> address}}"></p>
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
                  <div class="gallery gallery-fw" data-item-height="37">
                    <p>KK</p>
                    <img src="{{ asset('/storage/'.$skckform->kk_image) }}" alt="" style="height:200px;"><br><br>                    
                    <p>Image</p>
                    <img src="{{ asset('/storage/'.$skckform->your_image) }}" alt="" style="height:200px;"><br><br>                  
                    <p>Image</p>
                    <img src="{{ asset('/storage/'.$skckform->fingerprint_image) }}" alt="" style="height:200px;"><br><br>
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
                  <textarea type="text" name="name" class="form-control"  value="">{{$sponsor['0']->name}}</textarea>
                </div>
                <div class="form-group">
                <label>Sponsor Address</label>
                  <textarea type="text" name="name" class="form-control"  value="">{{$sponsor['0']->address}}</textarea>
                </div>
                <div class="form-group">
                  <label>Telp./Fax</label>
                  <input type="text" name="name" class="form-control"  value="{{$sponsor['0']->no_telp}}"></p>
                </div>
                <div class="form-group">
                <label>Type of Bussiness</label>
                  <input type="text" name="name" class="form-control"  value="{{$sponsor['0']->type}}"></p>
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
                <button class="btn btn-primary mr-1" type="submit" form="status">Konfirmasi</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </form>

  <script>
    function tambah() {
      var html = `<div class="">
                <div class="row">
                <div class="col-sm-4">
                <label>Name</label>
                <input type="text" name="name" class="form-control"  placeholder="" value="">
                </div>

                <div class="col-sm-1">
                <label>Age</label>
                <input type="text" name="name" class="form-control"  placeholder="" value="">
                </div>

                <div class="col-sm-7">
                <label>Address</label>
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
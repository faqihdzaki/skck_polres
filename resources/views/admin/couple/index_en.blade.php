@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>FAMILY</h1>
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
                    Personal
                  </div>
                </div>

                <div class="wizard-step wizard-step-active">
                  <div class="wizard-step-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="wizard-step-label">
                    Family
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-graduation-cap"></i>
                  </div>
                  <div class="wizard-step-label">
                    Education
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-gavel"></i>
                  </div>
                  <div class="wizard-step-label">
                    Criminal Case
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-info-circle"></i>
                  </div>
                  <div class="wizard-step-label">
                    Others
                  </div>
                </div>
                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-file"></i>
                  </div>
                  <div class="wizard-step-label">
                    Sponsor
                  </div>
                </div>
                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-paperclip"></i>
                  </div>
                  <div class="wizard-step-label">
                    Attechment
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form action="{{route('admin.school_en')}}" method="post" enctype="multipart/form-data" id="family">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <h4>Explain things as answer/ explenation for the questions posed as follows:</h4>
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
                  <input type="text" name="couple_name" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" name="couple_age" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>religion</label>
                  <select name="couple_relegion" id="for_member" class="form-control" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen" selected>Kristen</option>
                    <option value="Budha" selected>Budha</option>
                    <option value="Hindu" selected>Hindu</option>
                    <option value="Konghucu" selected>Konghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nationality</label>
                  <input type="text" name="couple_nationality" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Occipation</label>
                  <input type="text" name="couple_profession" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Address</label>
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
              <p>2. Father</p>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">

              <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="father_name" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" name="father_age" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>religion</label>
                  <select name="father_relegion" id="for_member" class="form-control" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen" selected>Kristen</option>
                    <option value="Budha" selected>Budha</option>
                    <option value="Hindu" selected>Hindu</option>
                    <option value="Konghucu" selected>Konghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nationality</label>
                  <input type="text" name="father_nationality" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Occipation</label>
                  <input type="text" name="father_profession" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Address</label>
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
              <p>3. Mother</p>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">

                               <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="mother_name" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" name="mother_age" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>religion</label>
                  <select name="mother_relegion" id="for_member" class="form-control" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen" selected>Kristen</option>
                    <option value="Budha" selected>Budha</option>
                    <option value="Hindu" selected>Hindu</option>
                    <option value="Konghucu" selected>Konghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nationality</label>
                  <input type="text" name="mother_nationality" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Occipation</label>
                  <input type="text" name="mother_profession" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Address</label>
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
              <p>4. Sibling</p>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="row ">
                  <div class="col-sm-4">
                    <label>Name</label>
                    <input type="text" name="sibling_name" class="form-control" required placeholder="" value="">
                  </div>
                  <div class="col-sm-1">
                    <label>Age</label>
                    <input type="text" name="sibling_age" class="form-control" required placeholder="" value="">
                  </div>
                  <div class="col-sm-3">
                    <label>Address</label>
                    <textarea type="text" name="sibling_address" class="form-control" required placeholder="" value=""></textarea>
                  </div>
                  <div class="col-sm-4">
                    <label>Occupation</label>
                    <input type="text" name="sibling_occupation" class="form-control" required placeholder="" value="">
                  </div>
                </div><br>
                <small style="color:#A9A9A9">*Click Button Add if you want add the form</small><br>
                <div class="">
                  <div class="form-group">
                    <div id="add-product">
                  </div>
                </div>
              </div>
              <div class="">
                <div class="form-group">
                  <div>
                    <a class="btn btn-success m-1 text-white" id="tambah" onclick="tambah()">Add</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-right">
            </div>
          </div>
        </div>
        <div class="card-footer text-right">
          <a href="{{route('admin.SKCKForm')}}" class="btn btn-secondary" type="reset" href="">Back</a>
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
                <label>Name</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>

                <div class="col-sm-1">
                <label>Age</label>
                <input type="text" name="name" class="form-control" required placeholder="" value="">
                </div>

                <div class="col-sm-3">
                <label>Address</label>
                <textarea type="text" name="name" class="form-control" required placeholder="" value=""></textarea>
                </div>

                <div class="col-sm-4">
                <label>Occupation</label>
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

@endsection
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
    <h1>PERSONAL</h1>

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
                   Personal
                  </div>
                </div>

                <div class="wizard-step">
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

          <form action="{{route('admin.couple_en')}}" method="post" enctype="multipart/form-data" id="skckEn">
            @csrf
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="products-carousel">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" required value="">
                </div>
                <div class="row ">
                <div class="col-sm-6">
                  <label>Place</label>
                  <input type="text" name="born" class="form-control" required value="">
                </div>
                <div class="col-sm-6">
                  <label>Date of Birth </label>
                  <input type="date" name="date" class="form-control" required value="2021-12-31">
                </div>
                </div>
                <div class="form-group">
                  <label>Religion</label>
                  <select name="relegion" id="for_member" class="form-control" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen" selected>Kristen</option>
                    <option value="Budha" selected>Budha</option>
                    <option value="Hindu" selected>Hindu</option>
                    <option value="Konghucu" selected>Konghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nationality</label>
                  <input type="text" name="nationality" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select name="gender" id="for_member" class="form-control" required>
                    <option value="Laki-Laki">Male</option>
                    <option value="Perempuan" selected>Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Occupation</label>
                  <input type="text" name="profession" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Current Address</label>
                  <textarea type="text" name="address" class="form-control" required value=""></textarea>
                </div>
                <div class="form-group">
                  <label>Passport No.</label>
                  <input type="text" name="no_passport" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Stay Permit No.</label>
                  <input type="text" name="no_kita_kitap" class="form-control" required value="">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" name="no_telp" class="form-control" required value="">
                </div>
              </div>
            </div>
            <div class="card-footer text-right">
              <!-- <a href="{{route('admin.couple')}}" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a> -->
              <button form="skckEn" class="btn btn-primary">Next</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
</div>
@endsection
@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>OTHER INFORMATION</h1>
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

                <div class="wizard-step wizard-step-active">
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


          <div class="card-header">
            <h4>III.Other Information</h4>
          </div>
          <div class="card-body">
          <form action="{{route('admin.sponsor_en')}}" method="post" enctype="multipart/form-data" id="information">
          @csrf
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Work experience and countries you have ever visited before?</label>
                <br>
                <small style="color:#A9A9A9">*State in what year, in what context and which countries were visited</small><br>
                <textarea type="text" name="profession_history" class="form-control" required value=""></textarea>
              </div>
              <div class="form-group">
                <label>Pleasure/Fondess/Hobbies </label>
                <textarea type="text" name="hoby" class="form-control" required value=""></textarea>
              </div>
              <div class="form-group">
                <label>Contact no. in case emergancy </label><br>
                <small style="color:#A9A9A9">*Phone Number</small><br>
                <input type="text" name="address" class="form-control" required value=""></input>
              </div>
            </div>
            <div class="card-footer text-right">
              <a href="{{route('admin.offense')}}" class="btn btn-secondary" type="reset">Back</a>
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
@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>SPONSOR</h1>
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

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-info-circle"></i>
                  </div>
                  <div class="wizard-step-label">
                    Other Information
                  </div>
                </div>

                <div class="wizard-step wizard-step-active">
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
            <h4>V.Sponsor</h4>
          </div>
          <div class="card-body">
          <form action="{{route('admin.attachment_en')}}" method="post" enctype="multipart/form-data" id="sponsor">
          @csrf
            <div class="owl-carousel owl-theme" id="products-carousel">
              <div class="form-group">
                <label>Sponsor by</label>
                <textarea type="text" name="name" class="form-control" required value=""></textarea>
              </div>
              <div class="form-group">
                <label>Sponsor Address</label>
                <textarea type="text" name="address" class="form-control" required value=""></textarea>
              </div>
              <div class="form-group">
                <label>Tel./Fax.</label>
                <input type="text" name="no_telp" class="form-control" required value=""></input>
              </div>
              <div class="form-group">
                <label>Type of Bussiness</label>
                <input type="text" name="type" class="form-control" required value=""></input>
              </div>

            </div>
          </form>
          </div>
          <div class="card-footer text-right">
            <a href="{{route('admin.other_en')}}" class="btn btn-secondary" >Kembali</a>
            <!-- <a href="{{route('admin.dashboard')}}" class="btn btn-icon icon-right btn-primary">SUBMIT <i class="fas fa-arrow-right"></i></a> -->
            <button form="sponsor" class="btn btn-primary">Next</button>
          </div>
        </div>
      </div>
</section>

@endsection
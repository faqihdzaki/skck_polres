@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>LAMPIRAN</h1>
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

               <div class="wizard-step wizard-step-active">
                  <div class="wizard-step-icon">
                    <i class="fas fa-paperclip"></i>
                  </div>
                  <div class="wizard-step-label">
                    Attechment
                  </div>
                </div>
              </div>
            </div>


            <div class="card-header">
              <h4>IV.ATTECHMENT</h4>
            </div>
            <div class="card-body">
              <form action="{{route('admin.skckstore_en')}}" method="post" enctype="multipart/form-data" id="image">
                @csrf
                <div class="owl-carousel owl-theme" id="products-carousel">
                  <div class="form-group">
                    <br>
                    <label>KK</label><br>
                    <input type="file" class="form-control" name="kk_image">
                  </div>
                  <div class="form-group">
                    <br>
                    <label>Picture</label><br>
                    <small style="color:#A9A9A9">*4x6 Background Red</small><br>
                    <input type="file" class="form-control" name="your_image">
                  </div>
                  <div class="form-group">
                    <br>
                    <label>FInger Print</label><br>
                    <input type="file" class="form-control" name="fingerprint_image">
                  </div>
                </div>
                <div class="card-footer text-right">
                  <a href="{{route('admin.sponsor_en')}}" class="btn btn-secondary" type="reset">Kembali</a>
                  
                  <button form="image" class="btn btn-primary">Next</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
</section>

@endsection
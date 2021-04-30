@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>CRIMINAL CASE</h1>
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

                <div class="wizard-step wizard-step-active">
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


          <div class="card-header">
            <h4>II.Criminal case Lodged and Abuse</h4>
          </div>

           <form action="{{route('admin.other_en')}}" method="post" enctype="multipart/form-data" id="offense">
           @csrf
          <div class="row">
           <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <p>1. Criminal Case</p>
                </div>
                <div class="card-body">               
                  <div class="form-group">
                    <label>Have you ever cought in a criminal case?</label>
                    <input type="text" name="case_1" class="form-control" required value="">
                  </div>
                  <div class="form-group">
                    <label>In what kind of case? </label>
                    <textarea type="text" name="case_2" class="form-control" required value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>What is the decision of the judge and verdict? </label>
                    <textarea type="text" name="case_3" class="form-control" required value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>Are you currently in the process of a criminal case? What kind of case? </label>
                    <textarea type="text" name="case_4" class="form-control" required value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>To what extent is the legal process?</label>
                    <input type="text" name="case_5" class="form-control" required value=""></input>
                  </div>                
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
                    <input type="text" name="offense_1" class="form-control" required value="">
                  </div>
                  <div class="form-group">
                    <label>what kind of violation of the law? </label>
                    <textarea type="text" name="offense_2" class="form-control" required value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>To what extent is the process?</label>
                    <input type="text" name="offense_3" class="form-control" required value=""></input>
                  </div>
                
                </div>
              </div>
              <div class="card-footer text-right">
            <a href= "{{route('admin.school')}}"class="btn btn-secondary" type="reset">Back</a>
            <!-- <a href= "{{route('admin.other')}}" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a> -->
            <button form="offense" class="btn btn-primary">Next</button>
          </div>
            </div>
          </div>
           </form>
        </div>
      </div>
    </div>    
</section>

@endsection
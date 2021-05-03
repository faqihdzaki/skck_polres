@extends('layouts.admin-master-new')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>PERKARA PIDANA</h1>
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
                    Data Pribadi
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-users"></i>
                  </div>
                  <div class="wizard-step-label">
                    Hubungan Keluarga
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-graduation-cap"></i>
                  </div>
                  <div class="wizard-step-label">
                    Pendidikan
                  </div>
                </div>

                <div class="wizard-step wizard-step-active">
                  <div class="wizard-step-icon">
                  <i class="fas fa-gavel"></i>
                  </div>
                  <div class="wizard-step-label">
                    Perkara Pidana
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-info-circle"></i>
                  </div>
                  <div class="wizard-step-label">
                   Informasi Lain
                  </div>
                </div>

                <div class="wizard-step">
                  <div class="wizard-step-icon">
                  <i class="fas fa-paperclip"></i>
                  </div>
                  <div class="wizard-step-label">
                  Lampiran
                  </div>
                </div>                
              </div>
            </div>
          </div>


          <div class="card-header">
            <h4>II.Tersangkut Perkara Pidana dan Pelanggaran</h4><br>
                 <h9 style="color:#A9A9A9">*jika form yang anda isi tidak ada jawabannya, isi dengan "-"</h9>
          </div>
          
           <form action="{{route('admin.other')}}" method="post" enctype="multipart/form-data" id="offense">
           @csrf
          <div class="row">
           <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <p>1. Perkara Pidana</p>
                </div>
                <div class="card-body">               
                  <div class="form-group">
                    <label>Apakah Saudara Pernah tersangkut perkara pidana?</label>
                    <select name="" id="for_member" class="form-control" required>
                    <option value="Pernah">Pernah</option>
                    <option value="Tidak Pernah" selected>Tidak Pernah</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Dalam Perkara apa? </label>
                    <textarea type="text" name="case_2" class="form-control" required value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>Bagaimana putusan dan Vonis hakim? </label>
                    <textarea type="text" name="case_3" class="form-control" required value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>Apakah Saudara sedang dalam proses perkara pidana? Kasus Apa? </label>
                    <textarea type="text" name="case_4" class="form-control" required value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>Sampai sejauh mana proses hukumnya?</label>
                    <input type="text" name="case_5" class="form-control" required value=""></input>
                  </div>                
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <p>2. Pelanggaran</p><br>
                 
                </div>
                <div class="card-body">                
                  <div class="form-group">
                    <label>Apakah Saudara Pernah melakukan pelanggaran hukum dan atau norma norma sosial?</label>
                    <select name="" id="for_member" class="form-control" required>
                    <option value="Iya" selected>Iya</option>
                    <option value="Tidak" >Tidak</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Pelanggaran hukum atau norma-norma sosial apa? </label>
                    <textarea type="text" name="offense_2" class="form-control" required value=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>Sampai sejauh mana prosesnya?</label>
                    <input type="text" name="offense_3" class="form-control" required value=""></input>
                  </div>
                
                </div>
              </div>
              <div class="card-footer text-right">
            <a href= "{{route('admin.school')}}"class="btn btn-secondary" type="reset">KEMBALI</a>
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
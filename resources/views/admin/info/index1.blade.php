@extends('layouts.admin-master-new')

@section('title')
Dashboard
@endsection

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>INFORMASI SEPUTAR SKCK
      </h1></div>



    <div class="section-body">
      <h2 class="section-title">INFO SKCK</h2>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">

        <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link" href="/info">SKCK HEBAT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="/info1">SKCK On The Spot</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/info2">Kewenangan Penerbitan SKCK</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/info3">Ketentuan Pas Foto SKCK</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/info4">Pembiayaan SKCK</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#"></a>
                      </li> -->
                    </ul>
                  </div>

                  <table class="table table-striped table-responsive">
              <thead>
                <tr>
                    <th style="width: 1050px"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 1050px; text-align: justify; line-height: 1;"></td>

                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">B.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span style="line-height: 115%;">SKCK On The Spot</span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">a.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">
                              </span></span>
                            <!--[endif]--><span lang="EN-US" style="line-height: 115%;">Sim Corner Simpanglima Semarang<o:p></o:p></span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;"><span style="line-height: 115%;">
                              Setiap hari Sabtu, mulai Pukul 19.00 sd 21.00 WIB. <o:p></o:p></span></p>

                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">b.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">
                              </span></span>
                            <!--[endif]--><span lang="EN-US" style="line-height: 115%;">Kantor Kecamatan Pedurungan<o:p></o:p></span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;"><span style="line-height: 115%;">
                              Setiap hari Senin dan Kamis, mulai pukul 09.00 sd 12.00 WIB.</span><span style="line-height: 115%;">&nbsp;</span></p>

                        </div>
                      </h5>
                    </td>
                 
                  </tr>
                </tbody>
              </table>
              <div class="card-footer text-right">
                <a href="/homeId" class="btn btn-secondary" type="reset">KEMBALI</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
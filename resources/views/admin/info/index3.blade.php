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
                        <a class="nav-link" href="/info1">SKCK On The Spot</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/info2">Kewenangan Penerbitan SKCK</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="/info3">Ketentuan Pas Foto SKCK</a>
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
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">D.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span style="line-height: 115%;">Ketentuan Pas Foto SKCK</span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;"><span style="text-indent: -0.25in;"></span><span style="text-indent: -0.25in; line-height: 115%;">
                              Pas Foto yang digunakan pada SKCK menggunakan ukuran 4x6 dengan latar belakang warna Merah, tampak jelas,
                              menghadap depan, berpakaian sopan(tidak berkaos), tidak selfie, dan dicetak menggunakan kertas foto dari Studio Foto.
                            </span><span style="text-indent: -0.25in;"></span></p>

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
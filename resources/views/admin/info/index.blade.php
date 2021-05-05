@extends('layouts.admin-master-new')

@section('title')
Dashboard
@endsection

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>INFORMASI SEPUTAR SKCK
      </h1>
    </div>



    <div class="section-body">
      <h2 class="section-title">INFO SKCK</h2>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">

          <div class="card">
            <div class="card-body">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="/info">SKCK HEBAT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/info1">SKCK On The Spot</a>
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
                  

                        <p class="MsoNormal" align="center" style="line-height: 1;"><span style="line-height: 115%;">Informasi SKCK<o:p></o:p></span></p>

                        <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;"><span style="line-height: 115%;">Dengan menggunakan layanan kami, Kami berharap dapat membantu
                            para pemohon untuk mendapat SKCK dengan lebih mudah. Layanan Yang Kami berikan meliputi
                            beberapa layanan seperti SKCK Online (Untuk permohonan SKCK Baru). SKCK Take Away (Untuk
                            permohonan memperpanjang SKCK ), SKCK Delivery (Untuk Penyandang Disabilitas) dan yang terakhir
                            adalah SKCK Info (Untuk Informasi Seputar SKCK).
                          </span><span style="line-height: 115%;">&nbsp;&nbsp;</span></p>

                        <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                          <!--[if !supportLists]--><span style="line-height: 115%;">A.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;
                            </span></span>
                          <!--[endif]--><span style="line-height: 115%;">SKCK HEBAT</span>
                        </p>

                        <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                          <!--[if !supportLists]--><span style="line-height: 115%;">a.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span></span>
                          <!--[endif]--><span style="line-height: 115%;">SKCK Online</span>
                        </p>
                        <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;"><span style="line-height: 115%;">
                            Layanan ini kami sediakan untuk pemohon yang ingin membuat SKCK, dengan layanan ini
                            pemohon tidak perlu mengisi formulir yang ada pada Kantor SKCK Polrestabes lagi.
                            Tinggal membawa Data yang akan di kirimkan melalui Email pemohon, kemudian pemohon
                            datang Ke Polrestabes langsung melanjutkan ke tahap berikutnya yaitu Sidik jari
                            (Bagi pemohon baru). dan dilanjutkan dengan tahap selanjutnya membyar biaya
                            Sebesar Rp 30,000. </span><span style="text-indent: -0.25in;">&nbsp;</span></p>

                        <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                          <!--[if !supportLists]--><span style="line-height: 115%;">b.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>
                          <!--[endif]--><span style="line-height: 115%;">SKCK Take Away<o:p></o:p></span>
                        </p>

                        <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;"><span style="line-height: 115%;">
                            Layanan ini kami sediakan untuk pemohon yang ingin memperpanjang SKCK, dengan layanan ini
                            pemohon tinggal mengisi form permohonan kemudian mendapatkan email balasan untuk
                            verifikasi data, dan pembyaran juga via online. Jika sudah selasai pemohon mendapatkan
                            jadwal ke Polrestabes untuk mengambil SKCK yang baru.</span></p>

                        <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                          <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">c.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span></span>
                          <!--[endif]--><span lang="EN-US" style="line-height: 115%;">SKCK Delivery</span>
                        </p>
                        <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;"><span style="line-height: 115%;">
                            Layanan ini kami sediakan untuk pemohon yang memiliki keadaan Disabilitas dan ingin membuat permohonan SKCK,
                            dengan layanan ini pemohon tinggal mengisi form permohonan yang dan kemudian petugas akan datang
                            untuk membantu proses pemohonan SKCK. jam Oprasional layanan ini adalah Pukul 08.00 sd 14.00 WIB.
                          </span></p>

                      </div>
                    </h5>
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
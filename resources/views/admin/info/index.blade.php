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
              <table class="table table-striped table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Content</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <td>
                      <h5 style="margin-bottom: 1rem;">
                        <div style="text-align: justify; line-height: 1;">
                          <p class="MsoNormal" align="center" style="line-height: 1;"><span style="line-height: 115%;">Informasi SKCK<o:p></o:p></span></p>

                          <p class="MsoNoSpacing" style="line-height: 1;"><span lang="IN" style="line-height: 115%;">Dengan menggunakan layanan kami, Kami berharap dapat membantu 
                          para pemohon untuk mendapat SKCK dengan lebih mudah. Layanan Yang Kami berikan meliputi 
                          beberapa layanan seperti SKCK Online (Untuk permohonan SKCK Baru), SKCK Take Away (Untuk 
                          permohonan memperpanjang SKCK ), SKCK Delivery (Untuk Penyandang Disabilitas) dan yang terakhir
                          adalah SKCK Info (Untuk Informasi Seputar SKCK).
                          </span><span style="line-height: 115%;">&nbsp;&nbsp;</span></p>

                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                            <!--[if !supportLists]--><span style="line-height: 115%;">A.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span style="line-height: 115%;">SKCK HEBAT</span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;">
                            <!--[if !supportLists]--><span style="line-height: 115%;">a.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span style="line-height: 115%;">SKCK Online</span>
                          </p>
                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;"><span style="text-indent: -0.25in;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-indent: -0.25in; line-height: 115%;">
                              Layanan ini kami sediakan untuk pemohon yang ingin membuat SKCK, dengan layanan ini 
                              pemohon tidak perlu mengisi formulir yang ada pada Kantor SKCK Polrestabes lagi.
                              Tinggal membawa Data yang akan di kirimkan melalui Email pemohon, kemudian pemohon
                              datang Ke Polrestabes langsung melanjutkan ke tahap berikutnya yaitu Sidik jari
                              (Bagi pemohon baru). dan dilanjutkan dengan tahap selanjutnya membyar biaya 
                              Sebesar Rp 30,000. </span><span style="text-indent: -0.25in;">&nbsp;</span></p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;">
                            <!--[if !supportLists]--><span style="line-height: 115%;">b.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>
                            <!--[endif]--><span style="line-height: 115%;">SKCK Take Away<o:p></o:p></span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;"><span style="text-indent: -0.25in;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-indent: -0.25in; line-height: 115%;">
                          Layanan ini kami sediakan untuk pemohon yang ingin memperpanjang SKCK, dengan layanan ini 
                              pemohon tinggal mengisi form permohonan kemudian mendapatkan email balasan untuk 
                              verifikasi data, dan pembyaran juga via online. Jika sudah selasai pemohon mendapatkan
                              jadwal ke Polrestabes untuk mengambil SKCK yang baru.</span></p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">c.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span lang="EN-US" style="line-height: 115%;">SKCK Delivery</span>
                          </p>
                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="line-height: 115%;">Pengontrol
                          Layanan ini kami sediakan untuk pemohon yang memiliki keadaan Disabilitas dan ingin membuat permohonan SKCK, 
                          dengan layanan ini pemohon tinggal mengisi form permohonan yang dan kemudian petugas akan datang
                          untuk membantu proses pemohonan SKCK. jam Oprasional layanan ini adalah Pukul 08.00 sd 14.00 WIB.
                          </span></p>

                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">B.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span style="line-height: 115%;">SKCK On The Spot</span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">a.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span lang="EN-US" style="line-height: 115%;">Sim Corner Simpanglima Semarang<o:p></o:p></span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;"><span style="line-height: 115%;">
                          Setiap hari Sabtu, mulai Pukul 19.00 sd 21.00 WIB. <o:p></o:p></span></p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">b.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span lang="EN-US" style="line-height: 115%;">Kantor Kecamatan Pedurungan<o:p></o:p></span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;"><span style="line-height: 115%;">
                          Setiap hari Senin dan Kamis, mulai pukul 09.00 sd 12.00 WIB.</span><span style="line-height: 115%;">&nbsp;</span></p>

                         
                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                            <!--[if !supportLists]--><span style="line-height: 115%;">C.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;"></span></span>
                            <!--[endif]--><span style="line-height: 115%;">Kewenangan Penerbitan SKCK (sesuai Perkap No. 18 Tahun 2014 tentang Tatacara  Penerbitan SKCK)<o:p></o:p></span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;">
                            <!--[if !supportLists]--><span style="line-height: 115%;">1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>
                            <!--[endif]--><span style="line-height: 115%;">Keperluan pada Perusahaan/Lembaga/Badan Swasta, SKCK diterbitkan oleh Unit Intelkam 
                            Polsek (sesuai dengan domisili Kecamatan KTP Pemohon).<o:p></o:p></span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;">
                            <!--[if !supportLists]--><span class="MsoIntenseEmphasis"><span style="line-height: 115%;">2.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
                            <!--[endif]--><span class="MsoIntenseEmphasis"><span style="line-height: 115%;">Keperluan pada Lembaga/Badan/Instansi Pemerintah dan Perusahaan Milik Negara, 
                            SKCK diterbitkan oleh Sat Intelkam Polres/Polresta/Polrestabes (sesuai domisili Kota/Kabupaten tempat tinggal.<o:p></o:p></span></span>
                          </p>

                          <p class="MsoListParagraphCxSpFirst" style="margin-left: 1in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">3.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span lang="EN-US" style="line-height: 115%;">Keperluan digunakan untuk keluar negeri, kunjungan, pendidikan, bekerja. SKCK diterbitkan Dit Intelkam Polda sesuai dengan daerah/provinsi tempat tinggal.<o:p></o:p></span>
                          </p>

                          <p class="MsoListParagraphCxSpFirst" style="margin-left: 1in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">4.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span lang="EN-US" style="line-height: 115%;">Keperluan digunakan untuk keluar negeri, kunjungan, pendidikan, bekerja. 
                            SKCK diterbitkan Dit Intelkam Polda sesuai dengan daerah/provinsi tempat tinggal.<o:p></o:p></span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">D.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span style="line-height: 115%;">Ketentuan Pas Foto SKCK</span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;"><span style="text-indent: -0.25in;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-indent: -0.25in; line-height: 115%;">
                          Pas Foto yang digunakan pada SKCK menggunakan ukuran 4x6 dengan latar belakang warna Merah, tampak jelas,
                           menghadap depan, berpakaian sopan(tidak berkaos), tidak selfie, dan dicetak menggunakan kertas foto dari Studio Foto. 
                           </span><span style="text-indent: -0.25in;">&nbsp;</span></p>

                           <p class="MsoNoSpacing" style="margin-left: 0.5in; line-height: 1;">
                            <!--[if !supportLists]--><span lang="EN-US" style="line-height: 115%;">E.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;
                              </span></span>
                            <!--[endif]--><span style="line-height: 115%;">Pembiayaan SKCK</span>
                          </p>

                          <p class="MsoNoSpacing" style="margin-left: 1in; line-height: 1;"><span style="text-indent: -0.25in;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-indent: -0.25in; line-height: 115%;">
                          Pembiayaan SKCK yang dibebankan kepada Masyarakat sebesar Rp. 30.000 
                          (sesuai dengan PP No. 76 Tahun 2020 tentang Jenis dan Tarif atas PNBP yang berlaku pada Kepolisian Negara Republik Indonesia)
                           </span><span style="text-indent: -0.25in;">&nbsp;</span></p>

                        </div>
                      </h5>
                    </td>
                    <td>
                    
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
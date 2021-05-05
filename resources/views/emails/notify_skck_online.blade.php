<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    .bordered {
        border: 1px solid black
    }

    td {
        border: 1px solid black
    }
</style>

<body>
    <h1>
        <center>
            <font size="5" face="arial">SKCK POLRESTABES SEMARANG</font>
        </center>
    </h1>
    <center><b>
            <img src="https://skck.polri.go.id/skckonline/assets/img/logo.png">
            <center><b>
                    <hr>
                    <h4>Hallo, {{ $data->name }}</h4>
                    <p>
                        Anda telah mengisi form SKCK pada website <a href="https://skck-online.idaman.org">SKCK Polrestabes Semarang</a>
                    </p>
                    <p>
                        Berikut adalah sekilas data diri anda:
                    </p>
                    <table class="bordered">
                        <thead>
                            <th>Data Diri</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>{{$name}}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{$address}}</td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td>{{$no_telp}}</td>
                            </tr>
                            <tr>
                                <td>Tempat, Tanggal lahir</td>
                                <td>{{$born}},{{$date}}</td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>{{$nik}} </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>

                    <p>
                        Selanjutnya, silahkan kunjungi Polres terdekat untuk mengkonfirmasi data diri anda, dan menuju ke langkah berikutnya.
                    </p>
                    <p>
                        Simpan barcode ini untuk nanti proses selanjutnya di polrestabes <br>
                        <img src="https://www.pngfind.com/pngs/m/541-5419856_bar-code-vector-transparent-zico-chocolate-coconut-water.png"></img>
                    </p>
                    <p>Jangan lupa membawa persyaratan lain seperti:</p>
                        <p> • Pas foto berwarna ukuran 4 x 6 cm sebanyak 6 (enam) lembar dengan latar belakang merah,
                         berpakaian sopan, tampak muka, dan bagi pemohon yang mengenakan jilbab, 
                         pasfoto harus tampak muka secara utuh.</p>
                        <p> • FC KK</p>
                        <p> • FC KTP</p>
                        <p> • Uang pembayaran Sebesar Rp.30,000</p>
                    <p>
                        Terima kasih
                    </p>
                    <hr>
</body>

</html>
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
                    <h4>Hallo, Faqih</h4>
                    <p>
                        Anda telah mengisi form SKCK pada website <a href=>SKCK Polrestabes Semarang</a>
                    </p>
                    <p style="color:red"> ID Anda: {{$id}} </p>
                    <p>
                        Berikut adalah sekilas data diri anda:
                    </p>
                    <table style="border: 1px solid black">
                        <thead>
                            <th>Data Diri</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid black">Nama</td>
                                <td style="border: 1px solid black">{{$name}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black">Pekerjaan</td>
                                <td style="border: 1px solid black">IT</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <p>Selanjutnya, Silahkan Lakukan pembayaran PNBP SKCK melalui Nomor Rek BRI 0083 01 000992 30 6 a.n. BPN Polrestabes.</p>
                       <p>Kemudian upload bukti pembayaran anda ke link <a href="">berikut ini</a></p> 
                    <!-- <p>
                        Selanjutnya, Kami akan Memverifikasi Data anda, silahkan tunggu email balasan dari Kami.
                    </p> -->
                    <p>
                        Terima Kasih Banyak
                    </p>
                    <hr>
</body>

</html>
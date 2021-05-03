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
                <td>Indrawan Dwi Prasetyo</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Jl. Erowati</td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td>+6289668058996</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal lahir</td>
                <td>Semarang, 29 November 1999</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td></td>
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
        Terima kasih
    </p>
</body>
</html>
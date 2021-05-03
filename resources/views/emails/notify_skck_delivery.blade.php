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
                <td>{{ $data->name }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{ $data->address }}</td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td>{{ $data->no_telp }}</td>
            </tr>
        </tbody>
    </table>
    <br>

    <p>
        Selanjutnya, petugas kami akan datang menghampiri anda untuk melanjutkan ke langkah berikutnya
    </p>
    <p>
        Terima kasih
    </p>
</body>
</html>
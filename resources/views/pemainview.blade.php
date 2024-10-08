<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center m-3">DAFTAR PEMAIN MU</h1>
    <table class="table m-3" border="1">
        <thead>
            <th>id</th>
            <th>Nama Pemain</th>
            <th>No Punggung</th>
            <th>Posisi</th>
        </thead>
        <tbody>
            @foreach($data_pemain as $index => $pemain)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

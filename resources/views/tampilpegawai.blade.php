<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel - Pegawai</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Data Pegawai</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            @foreach($pegawai as $p)
            <tbody>
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                        |
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>
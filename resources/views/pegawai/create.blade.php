<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h1>Tambah Pegawai</h1>
    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" id="jabatan" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="{{ route('pegawai.index') }}" class="btn btn-edit">Kembali</a>
</div>

</body>
</html>

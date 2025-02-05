<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h1>Edit Pegawai</h1>
    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $pegawai->nama }}" required>

        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" id="jabatan" value="{{ $pegawai->jabatan }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $pegawai->email }}" required>

        <button type="submit">Update</button>
    </form>
    <br>
    <a href="{{ route('pegawai.index') }}" class="btn btn-edit">Kembali</a>
</div>

</body>
</html>

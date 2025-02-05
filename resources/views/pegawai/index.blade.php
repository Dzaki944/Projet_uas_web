<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h1>Data Pegawai</h1>
    <a href="{{ route('pegawai.create') }}" class="btn btn-add">Tambah Pegawai</a>

    <table>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jabatan }}</td>
            <td>{{ $p->email }}</td>
            <td>
                <a href="{{ route('pegawai.edit', $p->id) }}" class="btn btn-edit">Edit</a>
                <form action="{{ route('pegawai.destroy', $p->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>

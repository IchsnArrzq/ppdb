<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Nisn</th>
            <th>:</th>
            <th>{{ $siswa->nisn }}</th>
        </tr>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th>{{ $siswa->nama }}</th>
        </tr>
        <tr>
            <th>Email</th>
            <th>:</th>
            <th>{{ $siswa->email }}</th>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <th>:</th>
            <th>{{ $siswa->nomor_telepon }}</th>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <th>{{ $siswa->jenis_kelamin }}</th>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <th>:</th>
            <th>{{ $siswa->tempat_lahir }}</th>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <th>{{ $siswa->tanggal_lahir }}</th>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <th>{{ $siswa->alamat }}</th>
        </tr>
        <tr>
            <th>Asal Sekolah</th>
            <th>:</th>
            <th>{{ $siswa->asal_sekolah }}</th>
        </tr>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <th>{{ $siswa->kelas }}</th>
        </tr>
        <tr>
            <th>Jurusan</th>
            <th>:</th>
            <th>{{ $siswa->jurusan }}</th>
        </tr>
    </table>
</body>

</html>

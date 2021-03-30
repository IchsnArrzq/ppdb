@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class=".table-responsive">
                        <table class="table table-bordered .table-responsive">
                            <tr>
                                <th>nisn</th>
                                <th>nama</th>
                                <th>email</th>
                                <th>nomor telepon</th>
                                <th>jenis_kelamin</th>
                                <th>tempat_lahir</th>
                                <th>tanggal_lahir</th>
                                <th>alamat</th>
                                <th>asal_sekolah</th>
                                <th>kelas</th>
                                <th>jurusan</th>
                                <th colspan="2">Option</th>
                            </tr>
                            @foreach($siswa as $data)
                            <tr>
                            <th>nisn</th>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->nomor_telepon }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->tempat_lahir }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->asal_sekolah }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>{{ $data->jurusan }}</td>
                                <td><a href="{{ route('siswa.edit',$data->id) }}" class="btn btn-warning">Edit</a></td>
                                <td><a href="{{ route('siswa.delete',$data->id) }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

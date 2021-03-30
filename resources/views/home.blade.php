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
                                <th colspan="3">Option</th>
                            </tr>
                            @foreach($siswa as $data)
                            <tr>
                                <th>{{ $data->nisn }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->nomor_telepon }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->tempat_lahir }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td><a href="{{ route('siswa.pdf',$data->id) }}" class="btn btn-info">Pdf</a></td>
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

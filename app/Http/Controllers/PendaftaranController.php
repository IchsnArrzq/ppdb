<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        // Siswa::create([
        //     'nisn' => $request->nisn ,
        //     'nama' => $request->nama ,
        //     'email' => $request->email ,
        //     'nomor_telepon' => $request->phone ,
        //     'jenis_kelamin' => $request->jenis_kelamin ,
        //     'tempat_lahir' => $request->tempat_lahir ,
        //     'tanggal_lahir' => $request->date ,
        //     'alamat' => $request->alamat ,
        //     'asal_sekolah' => $request->asal_sekolah ,
        //     'kelas' => $request->kelas ,
        //     'jurusan' => $request->jurusan
        // ]);
        $siswa = Siswa::where('nisn', $request->nisn)->first();

        $pdf = \PDF::loadview('pendaftaran-pdf',['siswa'=>$siswa]);
    	return $pdf->stream('pendaftaran-pdf');
    }
}

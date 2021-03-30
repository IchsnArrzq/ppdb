<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home',[
            'siswa' => Siswa::paginate(10)
        ]);
    }
    public function edit($id)
    {
        return view('siswa.edit',[
            'siswa' => Siswa::findOrFail($id)
        ]);
    }
    public function delete($id)
    {
        Siswa::findOrFail($id)->delete();
        return back();
    }
    public function update(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        $asd = Siswa::where('nama',$request->nama)->update($data);
        return back();
    }
    public function pdf($id)
    {
        $siswa = Siswa::findOrFail($id);
        $pdf = \PDF::loadview('pendaftaran-pdf',['siswa'=>$siswa]);
    	return $pdf->stream('pendaftaran-pdf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\Mahasiswa::all();
        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
{
    \App\Mahasiswa::create($request->all());
    return redirect('/mahasiswa')->with('sukses','Data Yang Diinput Berhasil !!!');
}
    public function edit($id)
   {
    $mahasiswa  = \App\Mahasiswa::find($id);
    return view('mahasiswa/edit',['mahasiswa' => $mahasiswa]);
   } 
    
    public function update(Request $request,$id)
      {
        $mahasiswa  = \App\mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('sukses','Data Berhasil Di Edit');
      }
      
      public function delete($id)
      {
        $mahasiswa  = \App\mahasiswa::find($id);
        $mahasiswa->delete($mahasiswa);
        return redirect('/mahasiswa')->with('sukses','Data Di Hapus');
      }
}

<?php

namespace App\Http\Controllers;

use App\Models\siswamodel;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    function index(){
        $data = array(
            'dt_siswa'=>siswamodel::all()
        );
        return view('siswa.list', $data);
    } 
       
function insert(Request $request){
  if ($request->isMethod('post')) {
        $siswa = new siswamodel();
        $siswa -> nis_siswa= $request->nis;
        $siswa -> nama_siswa= $request->nama;
        $siswa -> alamat_siswa= $request->alamat;
        $siswa -> save();
        return redirect('/siswa')->with('pesan', 'Data Siswa Berhasil Disimpan!');
    }
     return view ('siswa.form');
    }

function ubah(Request $request){
    $siswa = siswamodel::find($request->id);
    $data = array(
        'siswa' => $siswa
    );
    if ($request->isMethod('post')) {
          $siswa = new siswamodel();
          $siswa -> nis_siswa= $request->nis;
          $siswa -> nama_siswa= $request->nama;
          $siswa -> alamat_siswa= $request->alamat;
          $siswa -> save();
          return redirect('/siswa')->with(['pesan' => 'Data Siswa Berhasil Diupdate!']);
      }
       return view ('siswa.form',$data);
      }
    
    function hapus(Request $request){
              $siswa = siswamodel::find($request->id);
              $siswa -> delete();
              return redirect('/siswa')->with('pesan', 'Data Siswa Berhasil Dihapus!');
         }
}
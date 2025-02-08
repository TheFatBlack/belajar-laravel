<?php

namespace App\Http\Controllers;

use App\Models\local;
use App\Models\siswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\view;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    //
    public function index():view{
        $data_siswa=siswa::all();
        return view('siswa.index', [
            "menu"=>"siswa",
            "title"=>"Data Siswa",
            "data_siswa"=>$data_siswa
        ]);
    }

    public function create():view{
        $kelas=local::all();
        return view('siswa.create', [
            "menu"=>"siswa",
            "title"=>"Tambah Data Siswa",
            "kelas"=>$kelas
        ]);
    }

    public function store(Request $request):RedirectResponse{
        $validasi=$request->validate([
            "nama"=>"required",
            "nisn"=>"required",
            "jk"=>"required",
            "alamat"=>"required",
            "no_telp"=>"required",
            "local_id"=>"required",
            "foto"=>"image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ],[
            "nama.required"=>"Nama harus diisi",
            "nisn.required"=>"NISN harus diisi",
            "jk.required"=>"Jenis Kelamin harus diisi",
            "alamat.required"=>"Alamat harus diisi",
            "no_telp.required"=>"No Telp harus diisi",
            "local_id.required"=>"Kelas harus diisi",
            "foto.image"=>"Foto harus berupa gambar",
            "foto.mimes"=>"Foto harus berformat jpeg, png, jpg, gif, svg",
            "foto.max"=>"Foto maksimal berukuran 2048kb"
        ]);

        $simpan_foto=$request->file('foto')->store('foto_siswa');

        $siswa=new siswa;
        $siswa->nama=$validasi['nama'];
        $siswa->nisn=$validasi['nisn'];
        $siswa->jk=$validasi['jk'];
        $siswa->alamat=$validasi['alamat'];
        $siswa->local_id=$validasi['local_id'];
        $siswa->no_telp=$request->no_telp;
        $siswa->foto=$simpan_foto;        
        $siswa->save();

        return redirect()->route('siswa.index');
    }

    public function show($id):view{
        $siswa=siswa::find($id);
        return view('siswa.show', [
            "menu"=>"siswa",
            "title"=>"Detail Data Siswa",
            "siswa"=>$siswa
        ]);
    }
    
}
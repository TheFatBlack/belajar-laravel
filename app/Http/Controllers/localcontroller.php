<?php

namespace App\Http\Controllers;
use App\Models\local;
use Illuminate\Http\Request;
class localcontroller extends Controller
{
    //
    public function index(){
        $datakelas=local::all();
        return view('local.index',[
            "menu"=>"local",
            'data_kelas'=>$datakelas
        ]);
    }
    public function create(){
        return view('local.create',[
            "menu"=>"create"
        ]);
    }
    public function store(Request $request){
       $validasi=$request->validate([
           'nama_kelas'=>'required',
           'wali_kelas'=>'required'
       ]);
       $data_baru=New local();
       $data_baru->nama_kelas=$validasi['nama_kelas'];
       $data_baru->wali_kelas=$validasi['wali_kelas'];
       $data_baru->save();

       return redirect(route('local.index'));
    }
}
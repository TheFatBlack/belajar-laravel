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

    public function edit($a_id){
        $data_kelas=local::find($a_id);
        return view('local.edit',[
            "menu"=>"edit",
            "data_kelas"=>$data_kelas
        ]);
    }

    public function update(){
        $validasi=request()->validate([
            'id'=>'required',
            'nama_kelas'=>'required',
            'wali_kelas'=>'required'
        ]);
        $data_kelas=local::find($validasi['id']);
        $data_kelas->nama_kelas=$validasi['nama_kelas'];
        $data_kelas->wali_kelas=$validasi['wali_kelas'];
        $data_kelas->save();

        return redirect(route('local.index'));
    }

    public function destroy($a_id){
        $data_kelas=local::find($a_id);
        $data_kelas->delete();
        
        return redirect(route('local.index'));
    }
}
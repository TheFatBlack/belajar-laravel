<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //

    protected $fillable= ['nama','nisn','jk','alamat','no_telp','foto','local_id'];

    public function local(){
        return $this->belongsTo(local::class);
    }
}
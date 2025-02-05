<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    public function biodata(){
        $data=array(
            array("nama"=>"apip","kelas"=>"XI RPL 1"),
            array("nama"=>"anggek","kelas"=>"XI RPL 1"),
            array("nama"=>"haliqangela","kelas"=>"XI RPL 1")
        );
        return $data;
    }
}
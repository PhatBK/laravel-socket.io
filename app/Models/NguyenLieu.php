<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NguyenLieu extends Model
{
    protected $table = "nguyenlieu";
    
    public function monan(){
    	return $this->belongsTo('App\Models\MonAn', 'id_monan', 'id');
    }
}

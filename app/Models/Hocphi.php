<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hocphi extends Model
{

    protected $table = "fee";

    protected $fillable = ['id_student', 'semester', 'content', 'status'];
    public function student(){
        return $this->belongsTo('App\Models\student','id_student','id');
    }
}

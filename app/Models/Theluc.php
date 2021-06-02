<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theluc extends Model
{

    protected $table = "physical_result";

    protected $fillable = ['id_student', 'result', 'date_update'];

    public function student(){
        return $this->belongsTo('App\Models\student','id_student','id');
    }
}

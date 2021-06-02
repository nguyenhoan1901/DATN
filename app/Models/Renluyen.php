<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Renluyen extends Model
{

    protected $table = "training_result";

    protected $fillable = ['id_student', 'result', 'date_current', ];

    public function student(){
        return $this->belongsTo('App\Models\student','id_student','id');
    }
}

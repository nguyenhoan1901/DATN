<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hoctap extends Model
{

    protected $table = "learning_outcomes";

    protected $fillable = ['id_student', 'cpa', 'gpa', 'subject_debt', 'semester'];

    public function student(){
        return $this->belongsTo('App\Models\student','id_student','id');
    }
}

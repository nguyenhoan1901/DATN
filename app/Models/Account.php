<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    protected $table = "learning_information";

    protected $fillable = ['id_student', 'year_entered_school', 'training_level', 'program', 'faculty', 'study_status', 'grade', 'course',
        'status', 'accumulation', 'level_warning'];

    public function student(){
        return $this->belongsTo('App\Models\student','id_student','id');
    }
}

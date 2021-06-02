<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lichtruc extends Model
{
    protected $table = "schedule_duty";

    protected $fillable = ['id', 'date_duty', 'id_student', 'id_commander'];

    public function student(){
        return $this->belongsTo('App\Models\student','id_student','id');
    }
    public function commander(){
        return $this->belongsTo('App\Models\commander','id_commander','id');
    }
}

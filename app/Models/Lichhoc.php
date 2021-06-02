<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lichhoc extends Model
{
    protected $table = "schedule";

    protected $fillable = ['id_student', 'semester', 'date_start', 'date_finish', 'content'];

    public function student(){
        return $this->belongsTo('App\Models\student','id_student','id');
    }
}

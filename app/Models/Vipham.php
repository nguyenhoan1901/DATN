<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vipham extends Model
{

    protected $table = "break_discipline";

    protected $fillable = ['id', 'id_student', 'content', 'date_break', 'level'];

    public function student(){
        return $this->belongsTo('App\Models\student','id_student','id');
    }
}

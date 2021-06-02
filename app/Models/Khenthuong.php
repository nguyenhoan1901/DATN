<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Khenthuong extends Model
{

    protected $table = "achievements";

    protected $fillable = ['id', 'id_student', 'content', 'date_echievement','level'];

    public function student(){
        return $this->belongsTo('App\Models\student','id_student','id');
    }
}

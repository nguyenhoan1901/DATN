<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class commander extends Model
{
    //
    protected $table = "commanders";

    protected $fillable = ['id', 'username', 'fullname', 'birthday','gender','hometown','phonenumber','email','rank','position_government','organization','avatar'];

    public function users(){
        return $this->belongsTo('App\Models\Users','username','username');
    }
}

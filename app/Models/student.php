<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $table = "students";

    protected $fillable = ['id', 'username', 'fullname',
        'birthday', 'gender', 'hometown', 'phonenumber', 'email', 'rank',
        'position_government', 'organization', 'date_enlistment', 'date_party', 'official', 'position_party','role','id_group', 'avatar'];
    
    public function users(){
        return $this->belongsTo('App\Models\Users','username','username');
    }
    public function group(){
        return $this->belongsTo('App\Models\group','id_group','id');
    }
}

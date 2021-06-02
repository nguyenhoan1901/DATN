<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    //
    protected $table = "group";

    protected $fillable = ['id', 'name_group', 'school'];
}

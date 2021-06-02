<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notify";

    protected $fillable = ['id', 'module', 'user_id', 'message', 'data','status', 'reviewer'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Partner extends Model
{
    use HasTranslations;
    use SoftDeletes;

    public $translatable = ['name'];
    protected $table = "partner";
    protected $fillable = ['name', 'link', 'thumb'];
}

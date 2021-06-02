<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Translate extends Model
{
    use HasTranslations;
    use SoftDeletes;

    protected $table = "translate";

    public $translatable = ['detail'];
    protected $fillable = ['key', 'detail', 'desc'];
}

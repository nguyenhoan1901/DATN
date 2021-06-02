<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Config extends Model
{
    use HasTranslations;
    use SoftDeletes;

    public $translatable = ['detail'];
    protected $table = "config";

    protected $fillable = ['key', 'detail'];
}

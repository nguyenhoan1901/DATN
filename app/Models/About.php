<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasTranslations;
    use HasTags;

    public $translatable = ['title', 'desc', 'content', 'slogan'];

    protected $table = "about";

    protected $fillable = ['title', 'desc', 'content', 'slogan', 'image'];
}

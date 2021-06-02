<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dapps extends Model
{
    protected $table = "dapps";

    protected $fillable = ['slug', 'name', 'description', 'websiteUrl',
        'externalUrl', 'thumb', 'numberOfRegistries', 'numberOfNfts', 'coinrankingUrl', 'metaData'];
}

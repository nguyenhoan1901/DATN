<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $table = "token";

    protected $fillable = ['name', 'thumb', 'video', 'description', 'price', 'priceInDollar', 'auctionCreatedAt', 'backgroundColor', 'coinrankingUrl'
        , 'tokenId', 'dappName', 'dappSlug', 'slug', 'registryId', 'source_id', 'dapps_id', 'raw_data', 'registryBlockchain', 'registryContractAddress', 'metaData'];

    protected $casts = array(
        'metaData'=>'array',
        'rawData'=>'array',
    );
    public function dapps(){
        return $this->hasOne(Dapps::class, 'id', 'dapps_id');
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function coins(Request $request){
        listingLatest($request->start, $request->limit);
    }
}

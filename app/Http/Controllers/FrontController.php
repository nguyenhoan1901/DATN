<?php

namespace App\Http\Controllers;

use App\Models\Dapps;
use App\Models\Token;
use Illuminate\Http\Request;
use stdClass;

class FrontController extends Controller
{
    public function home(Request $request)
    {
        $query = Token::query();
        if ($request->get('search')) {
            $query->where('name', 'like', '%' . $request->get('search') . '%');
        }
        if ($request->get('orderBy')) {
            $sort = "asc";
            if ($request->get('sort') == "desc") {
                $sort = "desc";
            }
            if ($request->get('orderBy') == "price") {
                $query->orderBy('price', $sort);
            }
        }
        if ($request->get('latest')) {
            if ($request->get('latest') == "price") {
                $query->orderBy('updated_at', 'desc');
            } else {
                $query->orderBy('created_at', 'desc');
            }
        }
        $tokens = $query->paginate(18);
        return view('front.page.home', compact('tokens'));
    }

    public function token_detail($slug)
    {
        $token = Token::where('slug', $slug)->firstOrFail();
        return view('front.page.token_detail', compact('token'));
    }

    public function dapps()
    {
        $dapps = Dapps::all();
        return view('front.page.dapps', compact('dapps'));
    }

    public function dapps_detail($slug)
    {
        $detail = Dapps::where('slug', $slug)->firstOrFail();
        $detail->metaData = json_decode($detail->metaData);

        $mostExpensive = Token::where('dapps_id', $detail->id)->orderBy('price', 'desc')->take(5)->get();
        $latestPrice = Token::where('dapps_id', $detail->id)->orderBy('updated_at', 'desc')->take(5)->get();
        return view('front.page.dapps_detail', compact('detail', 'mostExpensive', 'latestPrice'));
    }
}

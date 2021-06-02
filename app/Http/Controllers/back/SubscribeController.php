<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use Yajra\DataTables\Facades\DataTables;

class SubscribeController extends Controller
{

    public function index(Request $request)
    {
        $results = Subscribe::paginate(20);
        return view('back.page.subscribe.list', compact('results'));
    }

    public function index_dt(Request $request)
    {
        return Datatables::of(Subscribe::query())
            ->make(true);
    }
}

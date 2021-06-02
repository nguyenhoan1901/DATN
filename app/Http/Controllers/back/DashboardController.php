<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Documents;
use App\Models\Hoctap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        $currentUser = Auth::user();
        $userId = $currentUser->id;
        $idAdmin = $currentUser->is_admin;
        if($idAdmin == 1){
            return view('back.page.dashboardadmin');
        }
        $hocKys = _hocKy();
        $accountInfo = Account::where('user_id',$userId)->first();
        $hocTapInfo = Hoctap::where([['user_id',$userId],['status',2]])->orderBy('updated_at', 'desc')->first();
        $documents = Documents::orderBy('updated_at', 'desc')->limit(6)->get();
        return view('back.page.dashboard',compact('currentUser','accountInfo','hocTapInfo','hocKys','documents'));
    }
}

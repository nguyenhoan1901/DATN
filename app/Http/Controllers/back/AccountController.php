<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = _trangthai();
        $currentUser = Auth::user();
        $isAdmin = $currentUser->is_admin;
        $userId = $currentUser->id;

        if($isAdmin == 1) {
            $accounts = Account::orderBy('account.created_at', 'desc')->join('users', 'users.id', '=', 'account.user_id')->select('account.*','users.name','users.is_admin')->get();
            return view('back.page.account.list', compact('accounts','hockys','status','currentUser'));
        }else {
            $result = Account::where('user_id', $userId)->get();
            $users = Users::where('id',$userId)->get();
            return view('back.page.account.form', compact('result','users', 'currentUser'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Account();
        $users = Users::all()->where('is_admin',0);
        $currentUser = Auth::user();
        return view('back.page.account.form', compact('result','users','currentUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $status = html_entity_decode($data['confirm']);
        if($status == 'Lưu'){
            $data['status'] = 0;
        }elseif($status == 'Gửi duyệt'){
            $data['status'] = 1;
        }else{
            $data['status'] = 2;
        }
        if(Account::create($data)){
            return redirect()->route('account.index')->with('success', 'Đã lưu thông tin cá nhân');
        }
        return redirect()->back()->withInput()->with('error', 'Có lỗi xảy ra, vui lòng thử lại!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Account::select('users.name','users.is_admin','account.*')->join('users', 'users.id', '=', 'account.user_id')->find($id);
        $currentUser = Auth::user();
        return view('back.page.account.show', compact('result', 'currentUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Account::find($id);
        $users = Users::all()->where('is_admin','0');
        $currentUser = Auth::user();
        return view('back.page.account.form', compact('result','users','currentUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Account::find($id);
        $data = $request->all();
        $status = html_entity_decode($data['confirm']);
        if($status == 'Lưu'){
            $data['status'] = 0;
        }elseif($status == 'Gửi duyệt'){
            $data['status'] = 1;
        }else{
            $data['status'] = 2;
        }
        if($post->update($data)){
            return redirect()->route('account.index')->with('success', 'Đã cập nhật kết quả học tập');
        }
        return redirect()->back()->withInput()->with('error', 'Có lỗi xảy ra, vui lòng thử lại!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Vipham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentUser = Auth::user();
        $viPhams = Vipham::orderBy('vipham.created_at', 'desc')->join('users', 'users.id', '=', 'vipham.user_id')->select('vipham.*','users.name')->get();
        $arrMucDo = array(
            1=>'Nặng',
            2=>'Nhẹ',
            3=>'Bình Thường',
        );
        return view('back.page.vipham.list', compact('viPhams','arrMucDo','currentUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Vipham();
        $users = Users::all()->where('is_admin',0);
        return view('back.page.vipham.form', compact('result','users'));
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
        if(Vipham::create($data)){
            return redirect()->route('vipham.index')->with('success', 'Đã lưu vi phạm');
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
        $result = Vipham::select('users.name','vipham.*')->join('users', 'users.id', '=', 'vipham.user_id')->find($id);
        return view('back.page.vipham.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Vipham::find($id);
        $users = Users::all()->where('is_admin',0);
        return view('back.page.vipham.form', compact('result','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Vipham::find($id);
        $data = $request->all();
        if($post->update($data)){
            return redirect()->route('vipham.index')->with('success', 'Đã cập nhật vi phạm');
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

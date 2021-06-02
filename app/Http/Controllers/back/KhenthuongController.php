<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Khenthuong;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KhenthuongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentUser = Auth::user();
        $khenThuongs = Khenthuong::orderBy('khenthuong.created_at', 'desc')->join('users', 'users.id', '=', 'khenthuong.user_id')->select('khenthuong.*','users.name')->get();
        return view('back.page.khenthuong.list', compact('khenThuongs','currentUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Khenthuong();
        $users = Users::all()->where('is_admin',0);
        return view('back.page.khenthuong.form', compact('result','users'));
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
        if(Khenthuong::create($data)){
            return redirect()->route('khenthuong.index')->with('success', 'Đã lưu khen thưởng');
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
        $result = Khenthuong::select('users.name','khenthuong.*')->join('users', 'users.id', '=', 'khenthuong.user_id')->find($id);
        return view('back.page.khenthuong.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Khenthuong::find($id);
        $users = Users::all()->where('is_admin',0);
        return view('back.page.khenthuong.form', compact('result','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Khenthuong::find($id);
        $data = $request->all();
        if($post->update($data)){
            return redirect()->route('khenthuong.index')->with('success', 'Đã cập nhật khen thưởng');
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

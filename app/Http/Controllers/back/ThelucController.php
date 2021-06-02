<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Theluc;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThelucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentUser = Auth::user();
        $theLucs = Theluc::orderBy('theluc.created_at', 'desc')->join('users', 'users.id', '=', 'theluc.user_id')->select('theluc.*','users.name')->get();
        $arrKetQua = array(
          1=>'Tốt',
          2=>'Khá',
          3=>'Trung bình',
        );
        return view('back.page.theluc.list', compact('theLucs','arrKetQua','currentUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Theluc();
        $users = Users::all()->where('is_admin',0);
        return view('back.page.theluc.form', compact('result','users'));
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
        if(Theluc::create($data)){
            return redirect()->route('theluc.index')->with('success', 'Đã lưu kết quả thể lực');
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
        $result = Theluc::select('users.name','theluc.*')->join('users', 'users.id', '=', 'theluc.user_id')->find($id);
        return view('back.page.theluc.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Theluc::find($id);
        $users = Users::all()->where('is_admin',0);
        return view('back.page.theluc.form', compact('result','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Theluc::find($id);
        $data = $request->all();
        if($post->update($data)){
            return redirect()->route('theluc.index')->with('success', 'Đã cập nhật kết quả thể lực');
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

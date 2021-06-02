<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Hoctap;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HoctapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentUser = Auth::user();
        $isAdmin = $currentUser->is_admin;
        $userId = $currentUser->id;
        if($isAdmin == 1){
            $hocTaps = Hoctap::orderBy('hoctap.created_at', 'desc')->join('users', 'users.id', '=', 'hoctap.user_id')->select('hoctap.*','users.name','users.is_admin')->get();
        }else{
            $hocTaps = Hoctap::where('hoctap.user_id',$userId)->orderBy('hoctap.created_at', 'desc')->join('users', 'users.id', '=', 'hoctap.user_id')->select('hoctap.*','users.name','users.is_admin')->get();
        }
        $hockys = _hocKy();
        $status = _trangthai();
        return view('back.page.hoctap.list', compact('hocTaps','hockys','status','currentUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Hoctap();
        $hockys = _hocKy();
        $currentUser = Auth::user();
        $isAdmin = $currentUser->is_admin;
        $userId = $currentUser->id;
        if($isAdmin == 1){
            $users = Users::all()->where('is_admin',0);
        }else{
            $users = Users::where('id',$userId)->get();
        }
        return view('back.page.hoctap.form', compact('result','hockys','users','currentUser'));
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
        if(Hoctap::create($data)){
            return redirect()->route('hoctap.index')->with('success', 'Đã lưu kết quả học tập');
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
        $result = Hoctap::select('users.name','users.is_admin','hoctap.*')->join('users', 'users.id', '=', 'hoctap.user_id')->find($id);
        $hockys = _hocKy();
        $currentUser = Auth::user();
        return view('back.page.hoctap.show', compact('result','hockys', 'currentUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Hoctap::find($id);
        $hockys = _hocKy();
        $currentUser = Auth::user();
        $isAdmin = $currentUser->is_admin;
        $userId = $currentUser->id;
        if($isAdmin == 1){
            $users = Users::all()->where('is_admin',0);
        }else{
            $users = Users::where('id',$userId)->get();
        }
        return view('back.page.hoctap.form', compact('result','hockys','users','currentUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Hoctap::find($id);
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
            return redirect()->route('hoctap.index')->with('success', 'Đã cập nhật kết quả học tập');
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

<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Lichhoc;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LichhocController extends Controller
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
            $lichHocs = Lichhoc::orderBy('lichhoc.created_at', 'desc')->join('users', 'users.id', '=', 'lichhoc.user_id')->select('lichhoc.*','users.name','users.is_admin')->get();
        }else{
            $lichHocs = Lichhoc::where('lichhoc.user_id',$userId)->orderBy('lichhoc.created_at', 'desc')->join('users', 'users.id', '=', 'lichhoc.user_id')->select('lichhoc.*','users.name','users.is_admin')->get();
        }
        $hockys = _hocKy();
        $status = _trangthai();

        return view('back.page.lichhoc.list', compact('lichHocs','hockys', 'status', 'currentUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentUser = Auth::user();
        $isAdmin = $currentUser->is_admin;
        $userId = $currentUser->id;
        $result = new Lichhoc();
        $hockys = _hocKy();
        if($isAdmin == 1){
            $users = Users::all()->where('is_admin',0);
        }else{
            $users = Users::where('id',$userId)->get();
        }
        $currentUser = Auth::user();
        return view('back.page.lichhoc.form', compact('result','hockys','users', 'currentUser'));
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
        if(Lichhoc::create($data)){
            return redirect()->route('lichhoc.index')->with('success', 'Đã lưu lịch học');
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
        $result = Lichhoc::select('users.name','lichhoc.*')->join('users', 'users.id', '=', 'lichhoc.user_id')->find($id);
        $hockys = _hocKy();
        $currentUser = Auth::user();
        return view('back.page.lichhoc.show', compact('result','hockys', 'currentUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentUser = Auth::user();
        $isAdmin = $currentUser->is_admin;
        $userId = $currentUser->id;
        $result = Lichhoc::find($id);
        $hockys = _hocKy();
        if($isAdmin == 1){
            $users = Users::all()->where('is_admin',0);
        }else{
            $users = Users::where('id',$userId)->get();
        }
        $currentUser = Auth::user();
        return view('back.page.lichhoc.form', compact('result','hockys','users', 'currentUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Lichhoc::find($id);
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
            return redirect()->route('lichhoc.index')->with('success', 'Đã cập nhật lịch học');
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

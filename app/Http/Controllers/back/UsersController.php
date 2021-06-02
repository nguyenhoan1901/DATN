<?php

namespace App\Http\Controllers\back;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = Users::orderBy('created_at', 'desc')->paginate(2);;
        return view('back.page.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Users();
        return view('back.page.users.form', compact('result'));
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
        if ($request->hasFile('thumb')) {
            $data['thumb'] = UploadHelper::uploadImage($request->file('thumb'));
        }
        $data['password'] = Hash::make($data['password']);
        if(!isset($data['is_admin'])){
            $data['is_admin'] = 0;
        }else{
            $data['is_admin'] = 1;
        }
        if(Users::create($data)){
            return redirect()->route('users.index')->with('success', 'Đã lưu nội dung');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Users::find($id);
        return view('back.page.users.form', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Users::find($id);
        $data = $request->all();
        if(!isset($data['is_admin'])){
            $data['is_admin'] = 0;
        }else{
            $data['is_admin'] = 1;
        }
        if ($request->hasFile('thumb')) {
            $data['thumb'] = UploadHelper::uploadImage($request->file('thumb'));
        }
        if($post->update($data)){
            return redirect()->route('users.index')->with('success', 'Đã lưu thông tin user');
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

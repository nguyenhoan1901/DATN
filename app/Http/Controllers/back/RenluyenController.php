<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Renluyen;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RenluyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentUser = Auth::user();
        $renLuyens = Renluyen::orderBy('renluyen.created_at', 'desc')->join('users', 'users.id', '=', 'renluyen.user_id')->select('renluyen.*','users.name')->get();
        $arrKetQua = array(
            1=>'Tốt',
            2=>'Khá',
            3=>'Trung bình',
        );
        return view('back.page.renluyen.list', compact('renLuyens','arrKetQua','currentUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Renluyen();
        $users = Users::all()->where('is_admin',0);
        return view('back.page.renluyen.form', compact('result','users'));
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
        if(Renluyen::create($data)){
            return redirect()->route('renluyen.index')->with('success', 'Đã lưu kết quả rèn luyện');
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
        $result = Renluyen::select('users.name','renluyen.*')->join('users', 'users.id', '=', 'renluyen.user_id')->find($id);
        return view('back.page.renluyen.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Renluyen::find($id);
        $users = Users::all()->where('is_admin',0);
        return view('back.page.renluyen.form', compact('result','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Renluyen::find($id);
        $data = $request->all();
        if($post->update($data)){
            return redirect()->route('renluyen.index')->with('success', 'Đã cập nhật kết quả rèn luyện');
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

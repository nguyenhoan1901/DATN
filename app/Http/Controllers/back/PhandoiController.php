<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Phandoi;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhandoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $phanDois = Phandoi::orderBy('phandoi.created_at', 'desc')->join('users', 'users.id', '=', 'phandoi.phan_doi_truong')->select('phandoi.*','users.name')->get();
        $currentUser = Auth::user();
        return view('back.page.phandoi.list', compact('phanDois','currentUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Phandoi();
        $users = Users::all()->where('is_admin',0);
        return view('back.page.phandoi.form', compact('result','users'));
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
        if(Phandoi::create($data)){
            return redirect()->route('phandoi.index')->with('success', 'Đã lưu phân đội');
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
        $result = Phandoi::select('users.name','phandoi.*')->join('users', 'users.id', '=', 'phandoi.phan_doi_truong')->find($id);
        return view('back.page.phandoi.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Phandoi::find($id);
        $users = Users::all()->where('is_admin',0);
        return view('back.page.phandoi.form', compact('result','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Phandoi::find($id);
        $data = $request->all();
        if($post->update($data)){
            return redirect()->route('phandoi.index')->with('success', 'Đã cập nhật phân đội');
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

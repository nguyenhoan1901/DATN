<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Notification::paginate(20);
        return view('back.page.partner.list', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Notification();
        return view('back.page.partner.form', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartner $request)
    {
        $request->validated();
        $data = $request->all();
        if ($request->hasFile('thumb')) {
            $data['thumb'] = UploadHelper::uploadImage($request->file('thumb'));
        }
        if(Notification::create($data)){
            return redirect()->route('partner.index')->with('success', 'Đã lưu nội dung');
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
        $result = Notification::find($id);
        return view('back.page.partner.form', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePartner $request, $id)
    {
        $post = Notification::find($id);
        $request->validated();
        $data = $request->all();
        if ($request->hasFile('thumb')) {
            $data['thumb'] = UploadHelper::uploadImage($request->file('thumb'));
        }
        if($post->update($data)){
            return redirect()->route('partner.index')->with('success', 'Đã lưu nội dung');
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

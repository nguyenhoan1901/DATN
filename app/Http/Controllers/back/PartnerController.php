<?php

namespace App\Http\Controllers\back;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartner;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Partner::paginate(20);
        return view('back.page.partner.list', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Partner();
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
        if(Partner::create($data)){
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
        $result = Partner::find($id);
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
        $post = Partner::find($id);
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

<?php

namespace App\Http\Controllers\back;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAbout;
use Validator;
use Illuminate\Http\Request;

use App\Models\About;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $results = About::paginate(20);
        return view('back.page.about.list', compact('results'));
    }

    public function create()
    {
        $result = new About();
        return view('back.page.about.form', compact('result'));
    }

    public function store(StoreAbout $request)
    {
        $request->validated();
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = UploadHelper::uploadImage($request->file('image'));
        }
        if(About::create($data)){
            return redirect()->route('about.index')->with('success', 'Đã lưu nội dung');
        }
        return redirect()->back()->withInput()->with('error', 'Có lỗi xảy ra, vui lòng thử lại!');
    }

    public function show($id)
    {
        $result = About::find($id);
        if(!$result){
            return redirect()->back()->with('error', 'Nội dung không tồn tại!');
        }
        $result->is_show = 1;
        if($result->save()){
            return redirect()->back()->with('success', 'Đã lưu thông tin!');
        }
        return redirect()->back()->with('error', 'Đã có lỗi xảy ra, vui lòng thử lại!');
    }

    public function edit($id)
    {
        $result = About::find($id);
        return view('back.page.about.form', compact('result'));
    }

    public function update(StoreAbout $request, $id)
    {
        $post = About::find($id);
        $request->validated();
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = UploadHelper::uploadImage($request->file('image'));
        }
        if($post->update($data)){
            return redirect()->route('about.index')->with('success', 'Đã lưu nội dung');
        }
        return redirect()->back()->withInput()->with('error', 'Có lỗi xảy ra, vui lòng thử lại!');
    }

    public function destroy($id)
    {
        //
    }
}

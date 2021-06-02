<?php

namespace App\Http\Controllers\back;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(){
        $configs = Config::orderBy('pos', 'asc')->get();
        foreach($configs->where('type', 'select') as $config){
            if($config->key == "web_side_category_id"){
                $config->options = Category::all();
            }
        }
        return view('back.page.config.form', compact('configs'));
    }

    public function update(Request $request){
        $data = $request->all();
        foreach($data as $colum=>$dt){
            if($colum == "detail"){
                foreach($dt as $key=>$content){
                    $config = Config::where('key', $key)->first();
                    if(!$config){
                        continue;
                    }
                    if($config->type == "image"){
                        if ($request->hasFile('detail.'.$key)) {
                            $config->detail = UploadHelper::uploadImage($request->file('detail.'.$key));
                        }
                    }else{
                        $config->detail = $content;
                    }
                    $config->save();
                }
            }
        }
        return redirect()->back()->with('success', 'Đã lưu thông tin!');
    }
}

<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Translate;
use Illuminate\Http\Request;

class TranslateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $trans = Translate::all();
        if($request->cache){
            $data = array();
            foreach($trans as $element){
                foreach($this->getLangs() as $lang){
                    $data[$lang->code][$element->key] = $element->getTranslation('detail', $lang->code);
                }
            }
            foreach($data as $lang=>$content){
                file_put_contents(base_path().'/resources/lang/'.$lang.'.json', json_encode($content, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT));
            }
            return redirect()->route('translate.index')->with('success');
        }
        if($request->get('new_key')){
            $exist = Translate::where('key', $request->new_key)->first();
            if(!$exist){
                $new = new Translate();
                $new->key = $request->new_key;
                $new->desc = '';
                $new->detail = '';
                $new->save();
            }
            return redirect()->route('translate.index')->with('success');
        }
        $trans = Translate::all();
        return view('back.page.translate.form', compact('trans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request)
    {
        if($request->get('id')){
            $data = $request->all();
            $post = Translate::find($request->id);
            if($post){
                $post->update($data);
            }
            return "Đã lưu";
        }
        return "Đã lưu thay đổi!";
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

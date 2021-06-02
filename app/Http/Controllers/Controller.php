<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Config;
use App\Models\Language;
use App\Models\News;
use App\Models\Page;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->loadCache();
    }

    public function loadCache(){
        /*// Thông tin giới thiệu
        $about = About::first();
        if(!$about){
            $about = new About();
        }
        view()->share('about', $about);*/
        // Language
        $global_langs = Language::all();
        view()->share('global_langs', $global_langs);
        /*
        // Category
        $categorys = Category::orderBy('pos')->get();

        $categorysTree = build_menu($categorys);
        view()->share('categorysTree', $categorysTree);

        $htmlMenu = view('front.module.menu', compact('categorysTree'))->render();
        view()->share('htmlMenu', $htmlMenu);
        $most_views = News::where('show', 1)->orderByViews()->take(5)->get();
        view()->share('most_views', $most_views);
        */
    }
}

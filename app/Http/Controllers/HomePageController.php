<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomePageController extends Controller
{

    function homePageIndex(){
        $data = DB::table('news_category')->where('is_active', 1)->get();

        return view('pages.frontend.index', compact('data'));
       
    }
    
    function newsCategoryIndex($newsCategorySlug){
        $data = DB::table('news_category')->where('is_active', 1)->get();

        $id = DB::table('news_category')->where('is_active', 1)->where('slug', $newsCategorySlug)->first();
        $info = DB::table('news')->where('is_active', 1)->where('news_category_id', $id->id)->get();

        return view('pages.frontend.category_news', compact('info', 'data'));
    }
}

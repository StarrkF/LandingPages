<?php

namespace App\http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Panel\ConfigController;
use App\Models\Comment;
use App\Models\Menu;
use Illuminate\Http\Request;

class ContentController extends ConfigController
{
    // function __construct()
    // {
    //     view()->share('menus',Menu::orderBy('id','asc')->get());
    // }

    //! Show multiple content page
    function index($link)
    {
        $menu=Menu::where('link',$link)->first();
        // dd($page->first()->catid);
        if($menu->catid==1)
        {
            $page=$this->dynamicModel($link)::where('status',1)->with('menu')->first();
            
        }
        if($menu->catid==2)
        {
            $page=$this->dynamicModel($link)::where('status',1)->with('menu')->orderBy('number','asc')->get();
            
        }

        return view('app.pages.content')->with('page',$page)->with('menu',$menu);
        
    }

    //! Show multiple content detail page
    function show($link,$id)
    {
        $all_post=$this->dynamicModel($link);
        $model=$this->dynamicModel($link)::where('id',$id);
        $info=$model->first();
        $comments=Comment::where('menuid',$info->menuid)->where('contentid',$info->id)->with('menu')->get();
        $posts=$all_post::where('id','!=',$info->id)->with('menu')->latest()->take(3)->get();
        
        return view('app.pages.multi.detail')->with('info',$info)->with('posts',$posts)->with('comments',$comments);
    }
}

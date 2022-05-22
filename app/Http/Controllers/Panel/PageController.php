<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\Panel\PageRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class PageController extends ConfigController
{
    public function index($link)
    {
        
        $model=$this->dynamicModel($link);
        $pages=$model::orderBy('number')->get();
        $menu=Menu::where('link',$link)->first();
        return view('admin.pages.menu-content.index')->with(['menu'=>$menu,'pages'=>$pages]);
    }

    public function store($link,PageRequest $request)
    {
        $img=$request->image;
        $model=$this->dynamicModel($link);
        if($img)
        {
            $img=$this->upload($link,$img);
            $model::create($request->validated()+['image'=>$img]); 
            return back();
        }
        $model::create($request->validated());
        return back();
    }

    public function delete($link,$id)
    {
        $model=$this->dynamicModel($link)::where('id',$id);
        if($model->first()->image)
        {
            $this->imgDelete($model->first()->image);
        }
        $model->delete();
        return back();
    }
    
    public function show($link,$id)
    {
        
        $page=$this->dynamicModel($link)::where('id',$id)->with('menu')->first();
        return view('admin.pages.menu-content.update')->with('page',$page);
    }

    public function update($link,$id,PageRequest $request)
    {
        $model=$this->dynamicModel($link)::where('id',$id);
        $img=$request->image;
        if($model->first()->image)
        {
            $this->imgDelete($model->first()->image);
        }

        if($img)
        {
            $img=$this->upload($link,$img);
            $model->update($request->validated()+['image'=>$img]); 
            return redirect()->route('admin.get.page',$link);
        }
        $model->update($request->validated());
        return redirect()->route('admin.get.page',$link);
    }
}

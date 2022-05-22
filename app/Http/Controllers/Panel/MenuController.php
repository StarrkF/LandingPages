<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\Panel\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class MenuController extends ConfigController
{

    public function index()
    {
        $menus=Menu::orderBy('number','asc')->get();
        return view('admin.pages.menu')->with('menus',$menus);
    }

    public function store(MenuRequest $request)
    {
        $link=Str::slug($request->name,'_');  
        Menu::create( $request->validated() +['link' => $link]);
        $this->createDBmodel($link);
        return back();
    }

    public function delete($link)
    {
        Menu::where('link',$link)->delete();
        $this->deleteDBmodel($link);
        File::deleteDirectory(public_path('upload\\'.$link));
        return back();
    }


    public function updateName($link,Request $request)
    {
        $new_link=Str::slug($request->name,'_');  
        if($new_link==$link)
        {
            return back();
        }

        Menu::where('link',$link)->update([
            'name' => $request->name,
            'link' => $new_link
        ]);
        $this->updateDBmodel($link,$new_link);
        return back();
    }

    public function updateNumber($id,Request $request)
    {

        Menu::where('id',$id)->update(['number'=>$request->number]);
        return back();
    }

}

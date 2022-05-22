<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class ConfigController extends Controller
{
   public function createDBmodel($link)
   {
        Schema::create($link, function (Blueprint $table) {
            $table->id();
            $table->foreignId('menuid')->constrained('menus')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->text('content');
            $table->string('key')->nullable();
            $table->string('desc')->nullable();
            $table->string('image')->nullable();
            $table->integer('number');
            $table->enum('status',[true,false])->default(true);
            $table->timestamps();
        });

        $model_script='<?php

            namespace App\Models;
    
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Database\Eloquent\Model;
    
            class '.ucfirst($link).' extends Model
            {
                use HasFactory;
                protected $table="'.$link.'";
                protected $guarded=[];
    
                public function menu()
                {
                    return $this->hasOne(Menu::class,"id","menuid");
                }
            }';
        File::put(app_path('Models').'/'.ucfirst($link).'.php',$model_script);
   }

   public function deleteDBmodel($link)
   {
    Schema::dropIfExists($link);
    File::delete(app_path('Models').'/'.ucfirst($link).'.php');
   }

   public function updateDBmodel($link,$new_link)
   {
       Schema::rename($link,$new_link);
       File::delete(app_path('Models').'/'.ucfirst($link).'.php');

       $model_script='<?php

            namespace App\Models;
    
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Database\Eloquent\Model;
    
            class '.ucfirst($new_link).' extends Model
            {
                use HasFactory;
                protected $table="'.$new_link.'";
                protected $guarded=[];
    
                public function menu()
                {
                    return $this->hasOne(Menu::class,"id","menu");
                }
            }';
        File::put(app_path('Models').'/'.ucfirst($new_link).'.php',$model_script);
   }

   public function dynamicModel($link)
   {
       return "App\Models\\".ucfirst($link);
   }

   public function upload($path,$img)
    {
        // $path = 'about'
        $imgname=time().uniqid().".".$img->extension();
        $img->move(public_path('upload/'.$path.'/'),$imgname); // PATH = 'upload/about/'
        $imgpath='upload/'.$path.'/'.$imgname;
        return $imgpath;
    }

    public function imgDelete($img)
    {
        try {
            unlink(public_path($img));
            return true;
        } catch (\Throwable $th) {
            return false;
        } 
    }
}

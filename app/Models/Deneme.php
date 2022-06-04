<?php

            namespace App\Models;
    
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Database\Eloquent\Model;
    
            class Deneme extends Model
            {
                use HasFactory;
                protected $table="deneme";
                protected $guarded=[];
    
                public function menu()
                {
                    return $this->hasOne(Menu::class,"id","menuid");
                }

                public function Category()
                {
                    return $this->hasOne(Category::class,"id","catid");
                }

            }
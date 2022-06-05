<?php

            namespace App\Models;
    
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Database\Eloquent\Model;
    
            class Teknoloji extends Model
            {
                use HasFactory;
                protected $table="teknoloji";
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
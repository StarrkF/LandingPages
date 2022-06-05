<?php

            namespace App\Models;
    
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Database\Eloquent\Model;
    
            class Bilim extends Model
            {
                use HasFactory;
                protected $table="bilim";
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
<?php

            namespace App\Models;
    
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Database\Eloquent\Model;
    
            class Sample_page extends Model
            {
                use HasFactory;
                protected $table="sample_page";
                protected $guarded=[];
    
                public function menu()
                {
                    return $this->hasOne(Menu::class,"id","menuid");
                }
            }
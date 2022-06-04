<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function menu()
    {
        return $this->hasOne(Menu::class,"id","menuid");
    }
}

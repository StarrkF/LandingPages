<?php

namespace App\http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function ShowComments($link)
    {

    }

    public function createComments(Request $request)
    {
        // try {
            $request->offsetUnset('_token');
            Comment::create($request->all());
            return back();
        // } catch (\Throwable $th) {
        //     return back();
        // }
        
    }
}

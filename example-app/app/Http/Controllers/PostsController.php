<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = DB::table("posts")->get();
        $posts = DB::table("posts")->where('id', 2)->get();
        dd($posts);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //ブログ一覧を表示する

    public function shoeList()
    {
        return view('blog.list');
    }
}

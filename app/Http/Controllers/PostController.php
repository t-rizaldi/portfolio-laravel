<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
         $data = [
            'title'     => 'Rizal WebDev | Blog'
         ];

         return view('blog.index', $data);
    }

    public function detail()
    {
        $data = [
            'title'     => 'Rizal WebDev | Detail Blog'
        ];

        return view('blog.detail', $data);
    }
}

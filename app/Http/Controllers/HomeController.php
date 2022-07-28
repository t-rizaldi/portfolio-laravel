<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Rzal WebDev | Home'
        ];

        return view('frontend.home', $data);
    }

    public function education()
    {
        return redirect('/document/cv.pdf');
    }
}

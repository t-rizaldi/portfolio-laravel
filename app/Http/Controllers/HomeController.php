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

        return view('home', $data);
    }

    public function education()
    {
        return redirect('/document/cv.pdf');
    }

    public function contact()
    {
        $data = [
            'title'     => 'Rizal WebDev | Contact Us'
        ];

        return view('contact', $data);
    }
}

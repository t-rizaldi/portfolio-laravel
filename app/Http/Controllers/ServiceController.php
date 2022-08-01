<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $data = [
            'title'     => 'Rizal WebDev | Services'
        ];

        return view('service', $data);
    }
}

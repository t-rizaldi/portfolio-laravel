<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $data = [
            'title'     => 'Rizal WebDev | Portfolio'
        ];

        return view('portfolio.index', $data);
    }
    
    public function detail(){
        $data = [
            'title'     => 'Rizal WebDev | Detail Portfolio'
        ];

        return view('portfolio.detail', $data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Rizal WebDev | Portfolio',
            'portfolios' => Portfolio::latest()->get()
        ];

        return view('portfolio.index', $data);
    }
    
    public function detail(Portfolio $portfolio)
    {
        $data = [
            'title'     => "Rizal WebDev | $portfolio->title",
            'portfolio' => $portfolio
        ];

        return view('portfolio.detail', $data);
    }
}

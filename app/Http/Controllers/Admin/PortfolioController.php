<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'         => 'Rizal WebDev | Admin Portfolio',
            'portfolios'    => Portfolio::all()
        ];

        return view('admin.portfolio.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'     => 'Rizal WebDev | Create Portfolio'
        ];

        return view('admin.portfolio.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'         => 'required',
            'slug'          => 'required|unique:portfolios,slug',
            'client'        => 'required',
            'website'       => 'url',
            'project_date'  => 'required|date_format:Y-m',
            'status'        => 'required',
            'description'   => 'required',
            'gambar'        => 'image|file|max:2048'
        ]);

        if($request->file('gambar'))
        {
            $gambar = $request->file('gambar')->store('img_portfolio');
            $validatedData['gambar'] = $gambar;
        }

        Portfolio::create($validatedData);
        return to_route('admin.portfolio.index')->with('toast_success', 'new portfolio has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        $data = [
            'title'     => 'Rizal WebDev | Admin Portfolio Detail',
            'portfolio' => $portfolio
        ];

        return view('admin.portfolio.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $data = [
            'title'     => 'Rizal WebDev | Admin Edit Portfolio',
            'portfolio' => $portfolio
        ];

        return view('admin.portfolio.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $rules = [
            'title'         => 'required',
            'slug'          => 'required',
            'client'        => 'required',
            'website'       => 'url',
            'project_date'  => 'required|date_format:Y-m',
            'status'        => 'required',
            'description'   => 'required',
            'gambar'        => 'image|file|max:2048'
        ];
        //cek apakah judul diganti
        if($request->title !=  $portfolio->title)
        {
            // kalau diganti rules slug di tambah
            $rules['slug'] = 'required|unique:portfolios,slug';
        }

        // validasi data
        $validatedData = $request->validate($rules);
        $validatedData['project_date'] = date('Y-m-t', strtotime($request->project_date));

        if($request->file('gambar'))
        {
            $gambar = $request->file('gambar')->store('img_portfolio');

            if(!empty($portfolio->gambar)) {
                Storage::delete($portfolio->gambar);
            }
            
            $validatedData['gambar'] = $gambar;
        } else {
            $validatedData['gambar'] = $request->gambar_lama;
        }

        Portfolio::where('slug', $portfolio->slug)->update($validatedData);
        return to_route('admin.portfolio.index')->with('toast_success', 'Portfolio has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->where('slug', $portfolio->slug)->delete();

        if(!empty($portfolio->gambar))
        {
            Storage::delete($portfolio->gambar);
        }

        return to_route('admin.portfolio.index')->with('toast_success', 'Portfolio has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Portfolio::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

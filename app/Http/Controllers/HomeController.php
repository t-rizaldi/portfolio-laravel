<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Rizaldi Web Developer',
            'posts'     => Post::with(['category'])->latest()->limit(3)->get()
        ];

        return view('home', $data);
    }

    public function education()
    {
        return redirect('/document/rizaldi.pdf');
    }

    public function contact()
    {
        $data = [
            'title'     => 'Rizal WebDev | Contact Us'
        ];

        return view('contact', $data);
    }

    public function message(Request $request)
    {
        $message = [
            'min'       => ':attribute is too short'
        ];

        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required|numeric',
            'subject'   => 'required|min:5',
            'found'   => 'required',
            'message'   => 'required|min:15'
        ], $message);

        Message::create($validatedData);
        return back()->with('toast_success', 'Message sent successfully, will respond as soon as possible');
    }

    public function messageProject(Request $request)
    {
        $message = [
            'min'       => ':attribute is too short'
        ];

        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required|numeric',
            'service'   => 'required',
            'message'   => 'required|min:15'
        ], $message);

        $validatedData['subject'] = "$request->service Service Order";

        Message::create($validatedData);
        return back()->with('toast_success', 'Message sent successfully, will respond as soon as possible');
    }


    /*==============================
            VERSION 2 LAYOUT
    ==============================*/

    public function index_v2()
    {
        $projects = Portfolio::latest()->limit(2)->get();
        $posts = Post::with(['category', 'user'])->latest()->limit(3)->get();

        $data = [
            'projects'  => $projects,
            'posts'     => $posts,
        ];

        return view('v2.index', $data);
    }

    public function service_v2()
    {
        $data = [
            'title' => 'Rizal Webdev | Services'
        ];

        return view('v2.service', $data);
    }

    public function portfolio_v2()
    {
        $data = [
            'title'         => 'Rizal Webdev | Portfolio',
            'portfolios'    => Portfolio::latest()->get()
        ];

        return view('v2.portfolio', $data);
    }

    public function portfolioDetail_v2(Portfolio $portfolio)
    {
        $data = [
            'title'     => 'Rizal Webdev | Portfolio Detail',
            'portfolio' => $portfolio
        ];

        return view('v2.portfolio-detail', $data);
    }

    public function blog_v2()
    {
        $data = [
            'title' => 'Rizal Webdev | Blog'
        ];

        return view('v2.blog', $data);
    }

    public function blogDetail_v2()
    {
        $data = [
            'title' => 'Rizal Webdev | Blog Detail'
        ];

        return view('v2.blog-detail', $data);
    }

    public function contact_v2()
    {
        $data = [
            'title' => 'Rizal Webdev | Contact'
        ];

        return view('v2.contact', $data);
    }
}

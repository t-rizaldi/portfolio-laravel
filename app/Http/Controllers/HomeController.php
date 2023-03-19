<?php

namespace App\Http\Controllers;

use App\Models\Message;
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
}

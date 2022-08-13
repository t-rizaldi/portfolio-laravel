<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
         $data = [
            'title'             => 'Rizal WebDev | Blog',
            'posts'             => Post::with(['category'])->latest()->paginate(5),
            'recentPosts'       => Post::with(['category'])->latest()->limit(5)->get(),
            'popularPosts'      => Post::with(['category'])->orderBy('view', 'DESC')->limit(5)->get(),
            'search'            => ''
         ];

         return view('blog.index', $data);
    }

    public function detail(Post $post)
    {
        $data = [
            'title'         => $post->title,
            'post'          => $post,
            'recentPosts'   => Post::with(['category'])->latest()->limit(5)->get(),
            'popularPosts'  => Post::with(['category'])->orderBy('view', 'DESC')->limit(5)->get(),
            'relatedPosts'  => Post::where('category_id', $post->category_id)->latest()->limit(3)->get()
        ];

        $post->view += 1;
        $post->save();

        return view('blog.detail', $data);
    }

    public function search(Request $request)
    {
        $data = [
            'title'             => "Search:  $request->search | Rizal WebDev",
            'posts'             => Post::with(['category'])
                                    ->whereFulltext('title', $request->search)
                                    ->orWhereFulltext('excerpt', $request->search)
                                    ->orWhereFulltext('body', $request->search)
                                    ->latest()->paginate(5),
            'search'            => $request->search, 
            'recentPosts'       => Post::with(['category'])->latest()->limit(5)->get(),
            'popularPosts'      => Post::with(['category'])->orderBy('view', 'DESC')->limit(5)->get()
         ];

         return view('blog.index', $data);
    }
}

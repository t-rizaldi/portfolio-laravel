<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'     => 'Rizal WebDev | Admin Blog',
            'posts'     => Post::with(['category'])->get()
        ];

        return view('admin.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'         => 'Rizal WebDev | Admin Create Post',
            'categories'    => PostCategory::all()
        ];

        return view('admin.blog.create', $data);
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
            'slug'          => 'required|unique:posts,slug',
            'category_id'   => 'required|numeric',
            'excerpt'       => 'required',
            'body'          => 'required',
            'image'         => 'image|file|max:2048'
        ]);

        $validatedData['view'] = 0;
        $validatedData['user_id'] = auth()->user()->id;

        if($request->file('image')) {
            $image = $request->file('image')->store('img_post');
            $validatedData['image'] = $image;
        }

        Post::create($validatedData);

        return to_route('admin.post.index')->with('toast_success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $data = [
            'title'     => $post->title,
            'post'      => $post
        ];

        return view('admin.blog.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data = [
            'title'         => 'Rizal WebDev | Admin Edit Post',
            'post'          => $post,
            'categories'    => PostCategory::all()
        ];

        return view('admin.blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title'         => 'required',
            'slug'          => 'required',
            'category_id'   => 'required|numeric',
            'excerpt'       => 'required',
            'body'          => 'required',
            'image'         => 'image|file|max:2048'
        ];

        // cek apakah judul berubah
        if($post->title != $request->title) {
            // kalau berubah set validatsi slug
             $rules['slug'] = 'required|unique:posts,slug';
        }

        //validasi data
        $validatedData = $request->validate($rules);

        $validatedData['view'] = $post->view;
        $validatedData['user_id'] = $post->user_id;

        if($request->file('image')) {
            $image = $request->file('image')->store('img_post');
            $validatedData['image'] = $image;

            if(!empty($post->image)) {
                Storage::delete($post->image);
            }
        } else {
            $validatedData['image'] = $request->oldImage;
        }

        Post::where('slug', $post->slug)->update($validatedData);

        return to_route('admin.post.index')->with('toast_success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(!empty($post->image)) {
            Storage::delete( $post->image);
        }

        Post::where('slug', $post->slug)->delete();
        return to_route('admin.post.index')->with('toast_success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

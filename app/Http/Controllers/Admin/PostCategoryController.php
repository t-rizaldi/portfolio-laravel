<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostCategoryController extends Controller
{
    public function index()
    {
        $data = [
            'title'         => 'Rizal Webdev | Admin Post Category',
            'categories'    => PostCategory::all()
        ];

        return view('admin.blog.catogory', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:post_categories,slug'
        ]);

        PostCategory::create($validatedData);
        return to_route('admin.post.category')->with('success', 'New category has been added!');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:post_categories,slug'
        ]);

        PostCategory::where('slug', $request->slugLama)->update($validatedData);
        return to_route('admin.post.category')->with('success', 'Category has been updated!');
    }

    public function destroy(PostCategory $postCategory)
    {
        PostCategory::where('slug', $postCategory->slug)->delete();
        return to_route('admin.post.category')->with('success', 'Category has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(PostCategory::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}

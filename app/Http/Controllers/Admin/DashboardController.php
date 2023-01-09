<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        // Data Chart Post
        $postCategories = PostCategory::all();
        $postCategoriesName = [];
        $totalPostByCtg = [];

        if ($postCategories) {
            foreach($postCategories as $pc) {
                $postCategoriesName[] = $pc->name;

                $totalPostByCtg[] = Post::with('category')->where('category_id', $pc->id)->count();
            }
        }

        $data = [
            'title'         => 'Rizal WebDev | Admin Dashboard',
            'portfolios'    => Portfolio::count(),
            'users'         => User::count(),
            'posts'         => Post::count(),
            'postCategories'=> $postCategoriesName,
            'postTotalByCtg'=> $totalPostByCtg

        ];

        return view('admin.dashboard', $data);
    }
}

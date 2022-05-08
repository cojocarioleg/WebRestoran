<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(4);
        return view('blog',[
            'blogs' => $blogs,
        ]);
    }
    public function showBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('showBlog', [
            'blog'=>$blog,
        ]);
    }
}

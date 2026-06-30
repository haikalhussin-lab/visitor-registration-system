<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class APIBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return response()->json([
            'message' => 'Blogs retrieved successfully',
            'blogs' => $blogs
        ]);
    }

    public function show(Blog $blog)
    {
        return response()->json([
            'message' => 'Blog retrieved successfully',
            'blog' => $blog
        ]);
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        return response()->json([
            'message' => 'Blog deleted successfully',
        ]);
    }
}

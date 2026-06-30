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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->save();
        return response()->json([
            'message' => 'Blog created successfully',
            'blog' => $blog
        ]);
    }

    public function update(Blog $blog, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
        ]);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->save();
        return response()->json([
            'message' => 'Blog updated successfully',
            'blog' => $blog
        ]);
    }
}

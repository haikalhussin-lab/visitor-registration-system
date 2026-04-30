<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        // query from visitors table using model Visitor
        $visitors = \App\Models\Visitor::all();
        // return  to view
        return view('visitors.index', compact('visitors'));
    }
    public function create()
    {
        return view('visitors.create');
    }
}

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

    public function store(Request $request)
    {
        //$visitor = \App\Models\Visitor::create($request->all());

        $visitor = new \App\Models\Visitor();
        $visitor->name = $request->name;
        $visitor->phone = $request->phone;
        $visitor->email = $request->email;
        $visitor->save();

        // redirect to index page
        return redirect()->route('visitors.index')->with('success', 'Visitor created successfully');
    }

    public function show(\App\Models\Visitor $visitor)
    {
        return view('visitors.show', compact('visitor'));
    }

    public function edit(\App\Models\Visitor $visitor)
    {
        return view('visitors.edit', compact('visitor'));
    }

    public function update(\App\Models\Visitor $visitor, Request $request)
    {
        $visitor->name = $request->name;
        $visitor->phone = $request->phone;
        $visitor->email = $request->email;
        $visitor->save();
        return redirect()->route('visitors.index')->with('success', 'Visitor updated successfully');
    }
}

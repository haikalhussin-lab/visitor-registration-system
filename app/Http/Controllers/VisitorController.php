<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:index visitors', ['only' => ['index']]);  
        $this->middleware('permission:create visitors', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit visitors', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete visitors', ['only' => ['delete']]);
    }
    public function index()
    {
        // query from visitors table using model Visitor
        $visitors = \App\Models\Visitor::all();
        $deletedVisitors = \App\Models\Visitor::onlyTrashed()->get();
        // return  to view
        return view('visitors.index', compact('visitors', 'deletedVisitors'));
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

        auth()->user()->notify(new \App\Notifications\VisitorCreatedNotification());

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

    public function delete(\App\Models\Visitor $visitor)
    {
        $visitor->delete();
        auth()->user()->notify(new \App\Notifications\VisitorDeletedNotification());
        return redirect()->route('visitors.index')->with('success', 'Visitor deleted successfully');
    }

    public function restore($visitor){
        $visitor = \App\Models\Visitor::onlyTrashed()->find($visitor);
        $visitor->restore();
        return redirect()->route('visitors.index')->with('success', 'Visitor restored successfully');
    }

    public function forcedelete($visitor){
        $visitor = \App\Models\Visitor::onlyTrashed()->find($visitor);
        $visitor->forceDelete();
        return redirect()->route('visitors.index')->with('success', 'Visitor forced deleted successfully');
    }
}

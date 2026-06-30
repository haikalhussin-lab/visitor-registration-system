<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class APIVisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::all();
        return response()->json([
            'message' => 'Visitors retrieved successfully',
            'visitors' => $visitors
        ]);
    }
    public function show(Visitor $visitor)
    {
        return response()->json([
            'message' => 'Visitor retrieved successfully',
            'visitor' => $visitor
        ]);
    }
    public function delete(Visitor $visitor)
    {
        $visitor->delete(); 
        return response()->json([
            'message' => 'Visitor deleted successfully',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        $visitor = new Visitor();
        $visitor->name = $request->name;
        $visitor->phone = $request->phone;
        $visitor->email = $request->email;
        $visitor->save();
        return response()->json([
            'message' => 'Visitor created successfully',
            'visitor' => $visitor
        ]);
    }
    public function update(Visitor $visitor, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        $visitor->name = $request->name;
        $visitor->phone = $request->phone;
        $visitor->email = $request->email;
        $visitor->save();
        return response()->json([
            'message' => 'Visitor updated successfully',
            'visitor' => $visitor
        ]);
    }
}

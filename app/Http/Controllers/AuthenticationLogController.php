<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthenticationLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request): View
    {
        $logs = $request->user()->authentications()->paginate(20);

        return view('authentication-logs.index', compact('logs'));
    }
}

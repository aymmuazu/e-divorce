<?php

namespace App\Http\Controllers;

use App\Models\Spouse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $spouses = Spouse::where('user_id', auth()->user()->id)->get();
        return view('home')->with('spouses', $spouses);
    }
}

<?php

namespace App\Http\Controllers;

use DB;
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
        $pos = DB::table('positions')->get();
        $user = DB::table('users')->get();
        $user_count = $user->count();
        $count = $pos->count();
        
        return view('home')->with(['pos' => $pos, 'count' => $count, 'user_count' => $user_count]);
    }
}

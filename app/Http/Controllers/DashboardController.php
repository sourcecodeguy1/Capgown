<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
    public function dashboard()
    {
        $title = 'dashboard';
        return view('dashboard')->with('title', $title);
    }
    public function inventory(){
        $title = 'Inventory';
        return view('dashboard/pages/inventory')->with('title', $title);
    }
}

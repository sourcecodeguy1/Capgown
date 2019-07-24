<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UCPost;
use Illuminate\Support\Facades\DB;

class UCPostsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // Load the index view e.g. university_california.blade.php file
        // with the data coming from the database. u_c_post_controllers

        $UCPost = UCPost::all();

        $gowns_sum = [
           UCPost::all()->sum('gown_2019'),
           UCPost::all()->sum('gown_2017_2018'),
           UCPost::all()->sum('gown_2016'),
           UCPost::all()->sum('gown_2015'),
           UCPost::all()->sum('Light_Blue'),
           UCPost::all()->sum('Seconds'),
           UCPost::all()->sum('Velveteen'),
           UCPost::all()->sum('Velveteen_discolored'),
           UCPost::all()->sum('Rental'),
           UCPost::all()->sum('Rentals_Out'),
           UCPost::all()->sum('Rentals_Left'),
           UCPost::all()->sum('Total')
        ];

        return view('university_california/index')->with(['ucposts' => $UCPost, 'gowns_sum' => $gowns_sum]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // There is now show page. Not necessary!!
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_uc = UCPost::find($id);

        return view('university_california/edit')->with(['edit_uc' => $edit_uc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
{

    $UCPost = UCPost::find($id);

    $UCPost->update($request->all());

    if ($UCPost->wasChanged()) {
        // changes have been made
        return redirect('university_california')->with(['success' => 'Changes were successfully saved.']);
    } else {
        return redirect('university_california/'.$id.'/edit')->with(['error' => 'No changes made.']);
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

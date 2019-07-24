<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\StanfordPost;

use DB;

class StanfordPostsController extends Controller
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
        // Display the index form
        //$title = "Stanford University";

        // Select all the stanford data from the database and pass it to the view.
        $posts_columns = StanfordPost::all();

        // Select all and sum all columns
        $sum_all_columns = [

            StanfordPost::all()->sum('White'),
            StanfordPost::all()->sum('Yellow'),
            StanfordPost::all()->sum('Orange'),
            StanfordPost::all()->sum('Drab'),
            StanfordPost::all()->sum('Red'),
            StanfordPost::all()->sum('Gold'),
            StanfordPost::all()->sum('Copper'),
            StanfordPost::all()->sum('Dark_Blue'),
            StanfordPost::all()->sum('Light_Blue'),
            StanfordPost::all()->sum('Total')
        ];

        return view('stanford_university/index')->with(['posts_columns' => $posts_columns, 'sum_all_columns' => $sum_all_columns]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stanford_edit = StanfordPost::find($id);

        $get_sum_column = StanfordPost::select(DB::raw("White + Yellow + Orange + Drab + Red + Gold + Copper + Dark_Blue + Light_Blue as total_gowns"))->where('id', $id)->first()->total_gowns;

        return view('stanford_university/edit')->with(['stanford_edit' => $stanford_edit, 'get_sum_column' => $get_sum_column]);
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
        $stanford_post = StanfordPost::find($id);

        $stanford_post->update($request->all());

        if ($stanford_post->wasChanged()) {
            // changes have been made
            return redirect('stanford_university')->with(['success' => 'Changes were successfully saved.']);
        } else {
            return redirect('stanford_university/'.$id.'/edit')->with(['error' => 'No changes made.']);
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

    public function stanford_2017(){

    }
}

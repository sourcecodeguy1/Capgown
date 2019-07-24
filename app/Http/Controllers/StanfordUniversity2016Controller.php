<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StanfordUniversity2016;

use DB;
class StanfordUniversity2016Controller extends Controller
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
        // Pull all data from database
        $data = StanfordUniversity2016::all();

        // Select all and sum all columns
        $sum_all_columns = [

            StanfordUniversity2016::all()->sum('White'),
            StanfordUniversity2016::all()->sum('Yellow'),
            StanfordUniversity2016::all()->sum('Orange'),
            StanfordUniversity2016::all()->sum('Drab'),
            StanfordUniversity2016::all()->sum('Red'),
            StanfordUniversity2016::all()->sum('Gold'),
            StanfordUniversity2016::all()->sum('Copper'),
            StanfordUniversity2016::all()->sum('Dark_Blue'),
            StanfordUniversity2016::all()->sum('Light_Blue'),
            StanfordUniversity2016::all()->sum('Total')
        ];

        return view('stanford_university_2016/index')->with(['data' => $data, 'sum_all_columns' => $sum_all_columns]);
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
        abort('404', 'Not found');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stanford_2016_edit = StanfordUniversity2016::findOrFail($id);

        if(!$stanford_2016_edit){

            abort('404', 'Oops! Not found!');

        } else{

            $total = StanfordUniversity2016::select(DB::raw("White + Yellow + Orange + Drab + Red + Gold + Copper + Dark_Blue + Light_Blue as total_gowns"))->where('id', $id)->first()->total_gowns;
            return view('stanford_university_2016/edit')->with(['stanford_2016_edit' => $stanford_2016_edit, 'total' => $total]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response SC: melissa_araujo
     */
    public function update(Request $request, $id)
    {
        $stanford_post = StanfordUniversity2016::find($id);

        $stanford_post->update($request->all());

        if ($stanford_post->wasChanged()) {
            return redirect('stanford_university_2016')->with(['success' => 'Changes were successfully saved.']);

        } else {
            return redirect('stanford_university_2016/' . $id . '/edit')->with(['error' => 'No changes made.']);
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

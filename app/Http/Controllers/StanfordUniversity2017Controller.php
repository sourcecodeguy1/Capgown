<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StanfordUniversity2017;
use DB;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StanfordUniversity2017Controller extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Pull all data from database
        $data = StanfordUniversity2017::all();

        // Select all and sum all columns
        $sum_all_columns = [

            StanfordUniversity2017::all()->sum('White'),
            StanfordUniversity2017::all()->sum('Yellow'),
            StanfordUniversity2017::all()->sum('Orange'),
            StanfordUniversity2017::all()->sum('Drab'),
            StanfordUniversity2017::all()->sum('Red'),
            StanfordUniversity2017::all()->sum('Gold'),
            StanfordUniversity2017::all()->sum('Copper'),
            StanfordUniversity2017::all()->sum('Dark_Blue'),
            StanfordUniversity2017::all()->sum('Light_Blue'),
            StanfordUniversity2017::all()->sum('Total')
        ];

        return view('stanford_university_2017/index')->with(['data' => $data, 'sum_all_columns' => $sum_all_columns]);
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
        $stanford_2017_edit = StanfordUniversity2017::findOrFail($id);

        if(!$stanford_2017_edit){

            abort('404', 'Oops! Not found!');

        } else{

            $total = StanfordUniversity2017::select(DB::raw("White + Yellow + Orange + Drab + Red + Gold + Copper + Dark_Blue + Light_Blue as total_gowns"))->where('id', $id)->first()->total_gowns;
            return view('stanford_university_2017/edit')->with(['stanford_2017_edit' => $stanford_2017_edit, 'total' => $total]);
        }

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

        $stanford_post = StanfordUniversity2017::find($id);

        $stanford_post->update($request->all());

        //$stanford_post = StanfordUniversity2017::findOrFail($id)->update($request->all());


        if ($stanford_post->wasChanged()) {
            return redirect('stanford_university_2017')->with(['success' => 'Changes were successfully saved.']);

        } else {
            return redirect('stanford_university_2017/' . $id . '/edit')->with(['error' => 'No changes made.']);
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

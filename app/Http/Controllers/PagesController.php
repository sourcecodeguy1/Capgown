<?php
/**
 * Created by PhpStorm.
 * User: JULIO
 * Date: 6/8/2019
 * Time: 12:31 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Capgown";
        return view("pages/index")->with('title', $title);
    }

    public function timecard(){
        $title = "Time Card";
        return view('pages/timecard')->with('title', $title);
    }

}
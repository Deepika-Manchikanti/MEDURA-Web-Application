<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\Client as Mongo; //here's mongo 
use Auth;

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

    $col = Auth::user()->email;
    $name = Auth::user()->name;

    $collection = (new Mongo)->medura_patients->$col;
    $patient_data = $collection->find()->toArray();

    $diagnostics = (new Mongo)->daignostics->$col;
    $diagnostics_data = $diagnostics->find()->toArray();

    $previous_medication = (new Mongo)->previous_medications->$name;
    $previous_medications = $previous_medication->find()->toArray();

    if($previous_medications) {
        $previous_medication = $previous_medications[sizeof($previous_medications)-1];
    } 
    else {
        $previous_medication = [ 'Medicine' => 'None'];
    }

    unset($patient_data['_id']);
    unset($diagnostics_data['_id']);
    
    
return view('home')->with('patient_data',$patient_data)->with('diagnostics', $diagnostics_data)->with('previous_medication', $previous_medication)->with('name',Auth::user()->name)->with('id',Auth::user()->email);

//  return $previous_medication; //debug flag
    }
}

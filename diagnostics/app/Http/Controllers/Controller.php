<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use MongoDB\Client as Mongo; //here's mongo

use Illuminate\Http\Request;
use DB;
use Auth;
use Storage;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function addfile(Request $req) {
    	
    	$img = $req->file('report');
        $report_name = $req->input('report_name');

    	$s = file_get_contents($img);
    	$d = 'data:image/jpg;base64,' . base64_encode($s);
    	 	$db = 'daignostics';
        	$col = $req->input('patient_id');
        	$s = (new Mongo)->$db->$col->insertOne([$report_name => $d]);
    	return view("home")->with('flag', 'SUCCESS');

    }
}

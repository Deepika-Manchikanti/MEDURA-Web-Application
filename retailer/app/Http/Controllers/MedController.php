<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MedController extends Controller {
   public function index() {
      $retailer = DB::select('select * from retailers');
      return view('home',['retailers'=>$retailer]);
   }
}
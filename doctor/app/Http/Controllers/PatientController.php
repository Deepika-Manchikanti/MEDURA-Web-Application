<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use MongoDB\Client as Mongo; //here's mongo 

use DB;
use Auth;
use Schema;
use Session;


class PatientController extends Controller
{
       public function prescribe(Request $request)
             {
       $db = 'medura_patients';
        $col = $request->session()->get('patient'); //collection name
        
        $data = $request->input();

        $data['doctor'] = Auth::user()->name;
        
        unset($data['_token']);
         $s = (new Mongo)->$db->$col->insertOne($data);
   //     return redirect('home')->with('success', 'Prescription added successfully'); //back to doctor's home page with a success flag
        
         //return $data; // debug flag to check what data was put into mongoDB
         return view('home');
            }


    public function set_patient(Request $req) {

       $patient = DB::table('patients')->where('email', $req->input('patient_id'))->first();
      
       
    $name =  $patient->name;
    $id = $patient->email;
           
           
    $req->session()->put('patient',$id); //creating a session variable with key patient, to keep the session even after refresh. 


    //return view('patient')->with('patient_data', $patient_data)->with('name', $name)->with('id',$id);


     $collection = (new Mongo)->medura_patients->$id;
    $patient_data = $collection->find()->toArray();

    $diagnostics = (new Mongo)->daignostics->$id;
    $diagnostics_data = $diagnostics->find()->toArray();

     $previous_medication = (new Mongo)->previous_medications->$id;
    $previous_medications = $previous_medication->find()->toArray();



    unset($patient_data['_id']);
    unset($diagnostics_data['_id']);
    
    return view('patient')->with('patient_data',$patient_data)->with('diagnostics', $diagnostics_data)->with('previous_medication', $previous_medications)->with('name', $name)->with('id',$id);

    }


    public function fp_auth(Request $req, $fp_hash) {
    
DB::table('patients')
            ->where('name', 'patient1')
            ->update(['fp' => $fp_hash]);
return "yepp from fp_auth";
    } 


    public function fp_authentication(Request $req,$fp_result) {

    $patient = DB::table('patients')->where('id', $fp_result)->first();

    DB::table('c_patients')->insert(['patient_id'=> $patient->email, 'verification_token'=>'yes']);

    return $patient->email;
      

    }

    public function auth_patient(Request $req) {

      $value = DB::table('c_patients')->where('verification_token', 'yes')->first();
      if($value) {
        DB::table('c_patients')->where('patient_id', $value->patient_id)->delete();
        return $value->patient_id;
      }
      else {
        return "not verified";
      }
      

                                }
}

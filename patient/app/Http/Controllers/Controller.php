<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\Client as Mongo; //here's mongo 
use Auth;
use Schema;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



      public function dispensed($var1)  {
       
       	$db = 'previous_medications';
      
        
        $s = str_split($var1); // array  
		$patient = DB::table('patients')->where('id', $s[sizeof($s)-1])->first();
     $col = $patient->name;

     if(sizeof($s) < 5) {
        return "Process incomplete";
     }
        
                if($s[1] == 1) {

                        return $patient->name . " Took a Specific medicine";
        			         }


                if($s[2] == 1) {
                            $med = 'COMBIFLAM';
                            $case = 'COLD';
                             $data = ['Medicine' => $med, 'Case'=> $case];

                            $inset_flag = (new Mongo)->$db->$col->insertOne($data);
 
                            return $patient->name . " took " . $med . " For " . $case;            
                }

                if($s[3] == 1) {
                            $med = 'DOLO-650';
                            $case = 'FEVER';

                             $data = ['Medicine' => $med, 'Case'=> $case];

                            $inset_flag = (new Mongo)->$db->$col->insertOne($data);
 
                         return $patient->name . " took " . $med . " For " . $case;            
                }


        
         return $patient->name . " - Process incomplete";
            
            }


            public function medicine_type($var) {
                    $patient = DB::table('patients')->where('id', $var)->first();
                    $id = $patient->email;

                    $collection = (new Mongo)->medura_patients->$id;
                    $prescription = $collection->find()->toArray();

                    $array = get_object_vars($prescription[sizeof($prescription)-1]);
                    $properties = array_keys($array);

                    return $properties[2];
                                      }
                                            }

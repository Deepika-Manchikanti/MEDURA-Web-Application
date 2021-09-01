<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
       public function store(Request $request)
    {
        $car = new patient();
        $car->carcompany = $request->get('doctor');
        $car->model = $request->get('date');
        $car->price = $request->get('prescription');        
        $car->save();
        return redirect('home')->with('success', 'Prescription added successfully');
    }

    public function index()
    {
        $all=Patient::all();
        return $all;
    }
}

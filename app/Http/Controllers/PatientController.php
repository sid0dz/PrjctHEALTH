<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\Auth;
class PatientController extends Controller
{
    //
    public function index(){
        $listpatients = Patient::all();
  return view('layouts.showPatients',['mes' => $listpatients]);
  //return view('tables',['mes' => $listpatients]);

    }

    public function store(Request $request){
       
       $patient= new Patient();
       $patient->name = $request->input('name');
       $patient->npatient = $request->input('npatient');
       $patient->patient_birth_date = $request->input('birthday');
       $patient->phone= $request ->input('phone');
       $patient->email = $request->input('email');
       $patient->save();
       $listpatients = Patient::all();
       return view('dashbord.secretary.patients',['mes' => $listpatients]);

    }
    public function showInfos(Request $request){
		$patient = Patient::find($request->input('id'));
       return view('layouts.showInfos',['patient'=>$patient]);
        
    }
    public function showInfosR($id){
		$patient = Patient::find($id);
       return view('layouts.showInfos',['patient'=>$patient]);
        
    }



    public function edit($id){
        $patient= Patient::find($id);
 
        return view ('dashbord.secretary.editpatients', ['patient'=> $patient]);
     }

    public function update(Request $request, $id){
        $patient= Patient::find($id);
        $patient->name= $request->input('name');
        $patient->npatient= $request->input('npatient');
        $patient->patient_birth_date= $request->input('birthday');
        $patient->phone= $request->input('phone');
        $patient->email= $request->input('email');
        $patient->save();
        return redirect()->action('PatientController@showInfosR',['id'=>$id]);
      }
    public function destroy(Request $request,$id){
      $patient =Patient:: find($id);
      $patient->delete();
      $listpatients = Patient::all();
      return redirect()->action('PatientController@index');
           
    }
}

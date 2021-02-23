<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Patient;
use App\Maladie;
use App\Rdv;
use App\Allergie;
use App\Commentaire;
use App\Orientation;
use App\User;
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
    $orientation = Orientation::where(['patient_id','=',$id],
          ['medecin_id','=',Auth::user()->id])->get;
       return view('layouts.showInfos',['patient'=>$patient , 'orientations'=>$orientation]);
        
    }
    public function showInfosR($id){
		$patient = Patient::find($id);
    $rdvs = Rdv::where('patient_id','=',$id)->get();
    for( $x=0; $x < count($rdvs) ; $x++){
      $rdvs[$x]->medecin = User::find($rdvs[$x]->medecin_id)->fname." ".User::find($rdvs[$x]->medecin_id)->lname;
    }

  $orientations = Orientation::where('patient_id','=',$id)->get();
    for( $x=0; $x < count($orientations) ; $x++){
        $orientations[$x]->medecin = User::find($orientations[$x]->medecin_id)->fname." ".User::find($orientations[$x]->medecin_id)->lname;
    }
return view('layouts.showInfos',['patient'=>$patient , 'orientations'=>$orientations,'rdvs'=>$rdvs]);

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
public function getMal($op,$patid){
 if($op==0) $maladies= Maladie::where('patient_id',$patid)->get();
else if ($op==1)$maladies= Allergie::where('patient_id',$patid)->get();
else if ($op==2)$maladies= Commentaire::where('patient_id',$patid)->get(); 
  for($i=0; $i<count($maladies) ;$i++){
    $nomMed = User::find($maladies[$i]['medid'])->fname." ".User::find($maladies[$i]['medid'])->lname;
    $maladies[$i]['medid'] = $nomMed;
  }
  return view('dashbord.medecin.ajaxcomp.getMal',['maladies'=>$maladies]);

}

}

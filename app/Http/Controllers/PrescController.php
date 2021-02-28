<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Prescription;
use Illuminate\Support\Facades\Auth;
class PrescController extends Controller
{
    
    //
    public function new(){
        $patient = Patient::find(15);
  return view('dashbord.medecin.nvpresc',['patient' => $patient]);
    }


    public function store(Request $request){
     //   ($medid,$patid,$medics,$dose,$date
    $medics = $request->input("medic");
    if($medics==null) {
    $patient = Patient::find($request->input("patid"));
    return view('dashbord.medecin.nvpresc',['patient' => $patient]);
      
    
 }
 else{
    $doses=  $request->input("dose");
    $prises=  $request->input("prise");
    $durees=  $request->input("duree");
        
        $medicament = "";
        for ($x = 0; $x < sizeof($medics) ; $x++) {

            $medicament = $medicament."[".$medics[$x]."--".$doses[$x]."--".$prises[$x]." Par jour-- Pendant ".$durees[$x]."Jours]";        
        }
        
        $prescription = new Prescription;
        $prescription->medecin_id =Auth::user()->id;
        $prescription ->patient_id =$request->input("patid");
        $prescription ->date = date('Y-m-d');
        $prescription ->medics =  $medicament;
        $prescription->save();

        $nomp=Patient::find($request->input("patid"))->name;
        $nomMed=Auth::user()->fname." ".Auth::user()->lname;
        


        return view('dashbord.medecin.prsuccess')->with('data',[
            'idp'=>$request->input("patid"),
            'nomp'=>$nomp,
            'nomMed'=>$nomMed,
            'medics'=>$medics,
            'doses'=>$doses,
            'prises'=>$prises,
            'durees'=>$durees]);

    }}



}
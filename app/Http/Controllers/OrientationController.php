<?php

namespace App\Http\Controllers;

use App\Orientation;
use App\Patient;
use Illuminate\Http\Request;

class OrientationController extends Controller
{






        public function store(Request $request){
       
       $orientation= new Orientation();
       $orientation-> medecin_id= $request->input('medecin_id');
       $orientation-> patient_id= $request->input('patient_id');
       $orientation->date= $request ->input('date');
       $orientation->contenu = $request->input('contenu');
       $orientation->save();
       
return "Success";        
      

    }

    public function create($id = 1){
    $patient= Patient::find($id);
    return view ('dashbord.medecin.orientation',['patient'=>$patient]);
 }
}

<?php

namespace App\Http\Controllers;

use App\Orientation;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrientationController extends Controller
{






        public function store(Request $request){
       
       $orientation= new Orientation();
       $orientation-> medecin_id= Auth::user()->id;
       $orientation-> patient_id= $request->input('patient_id');
       $orientation->date= date('Y-m-d');
       $orientation->contenu = $request->input('contenu');
       $orientation->save();
       
return "Success";        
      

    }

    public function create($id = 1){
    $patient= Patient::find($id);
    return view ('dashbord.medecin.orientation',['patient'=>$patient]);
 }
}

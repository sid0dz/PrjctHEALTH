<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
class OrientationController extends Controller
{
    
    public function create($id){
        $patient= Patient::find($id);
 
        return view ('dashbord.medecin.orientation', ['patient'=> $patient]);
     }
}

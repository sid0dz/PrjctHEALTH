<?php

namespace App\Http\Controllers;

use App\Orientation;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrientationController extends Controller
{

      public function list($id){
        $patient= Patient::find($id);
          $orientation = Orientation::where(['patient_id','=',$id],
          ['medecin_id','=',Auth::user()->id])->get;

        return view('dashbord.medecin.showInfo',['patient'=>$patient,'orientations'=>$orientation]);
      }




        public function store(Request $request){
       
       $orientation= new Orientation();
       $orientation-> medecin_id= Auth::user()->id;
       $orientation-> patient_id= $request->input('patient_id');
       $orientation->date= date('Y-m-d');
       $orientation->contenu = $request->input('contenu');
       $orientation->save();
       $patient= Patient::where('id','=',$orientation->patient_id)->first();
       $orientationlist = Orientation::where('patient_id','=',$patient->id)->get();
       
      // return redirect()->action('PatientController@showInfosR',['id'=>$request->input('patient_id')]);
      return view('dashbord.medecin.orsuccess',
      ['or'=>$orientation,
      'pname'=>Patient::find($request->input('patient_id'))->name
      ]);

    }
    public function printOr($id){

$orientation= Orientation::find($id);
      return view('dashbord.medecin.orsuccess',
      ['or'=>$orientation,
      'pname'=>Patient::find($orientation->patient_id)->name
      ]);
    }

    public function create($id = 1){
    $patient= Patient::find($id);
    return view ('dashbord.medecin.orientation',['patient'=>$patient]);
 }

 public function edit($id){
     $orientation= Orientation::find($id);
     $patient= Patient::where('id','=',$orientation->patient_id)->first();
     return view ('dashbord.medecin.editorientation',['patient'=>$patient , 'orientation'=>$orientation]);

 }
 public function update(Request $request,$id){
       $orientation= Orientation::find($id); 
       $orientation-> medecin_id= Auth::user()->id;
       $orientation-> patient_id= $request->input('patient_id');
       $orientation->date= date('Y-m-d');
       $orientation->contenu = $request->input('contenu');
       $orientation->save();
       $patient= Patient::where('id','=',$orientation->patient_id)->first();
       $orientationlist = Orientation::where('patient_id','=',$patient->id)->get();
       return redirect()->action('PatientController@showInfosR',['id'=>$patient->id]);
      
 }
 public function destroy($id){
     $orientation= Orientation::find($id);
     $patient= Patient::where('id','=',$orientation->patient_id)->first();
       $orientationlist = Orientation::where('patient_id','=',$patient->id)->get();
     $this->authorize('delete',$orientation);
     $orientation->delete();

     return view('dashbord.medecin.showInfo',['patient'=>$patient,'orientations'=>$orientationlist]);
 }
}

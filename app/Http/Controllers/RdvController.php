<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;
use App\Patient;
use App\Dmrdv;
use App\User;
use Illuminate\Support\Facades\Auth;
use URL;
use Illuminate\Support\Facades\DB;
class RdvController extends Controller
{


   public function newRDV($id){
      $patient= Patient::find($id);
      $meds = User::where('role','=',1)->get();
      return view('layouts.rdv.seldoc',['meds'=>$meds]);
   }
   public function deleterdv($id){
      $rdv= Rdv::find($id);
      $rdv->delete();
      return "Success";
   }

public function newRDV2($id,$medid){

   return view('layouts.rdv.seldate')->with('data',['id'=>$id,'medid'=>$medid]);
}
public function newRDV3($id,$medid,$date){

   return view('layouts.rdv.selheure')->with('data',['id'=>$id,'medid'=>$medid,'date'=>$date]);


}
public function newRDV5($id,$medid,$date,$heure){
   $rdv = new Rdv();
   $rdv->medecin_id = $medid;
   $rdv->patient_id = $id;
   $rdv->date = $date;
   $rdv->heure = $heure;
   $rdv->motif = "Non renseigné";
   $rdv->save();
$nom = Patient::find($id)->name;
$fnom = User::find($medid)->fname;
$lnom = User::find($medid)->lname;
return view('layouts.rdv.success')->with('data',['idp'=>$id,'nomp'=>$nom,'nomMed'=>$fnom." ".$lnom,'date'=>$date,'heure'=>$heure]);
}
public function newRDV4($id,$medid,$date,$heure,$motif){
   $rdv = new Rdv();
   $rdv->medecin_id = $medid;
   $rdv->patient_id = $id;
   $rdv->date = $date;

   $rdv->heure = $heure;
   $rdv->motif = $motif;
   $rdv->save();
$nom = Patient::find($id)->name;
$fnom = User::find($medid)->fname;
$lnom = User::find($medid)->lname;
return view('layouts.rdv.success')->with('data',['idp'=>$id,'nomp'=>$nom,'nomMed'=>$fnom." ".$lnom,'date'=>$date,'heure'=>$heure,'motif'=>$motif]);
}


public function req($date,$heure,$departement,$medecin,$name,$birthday,$phone,$email,$dejap,$motif)
{
   $dm= new Dmrdv();
   $dm->date = $date;
   $dm->heure = $heure;
   $dm->departement = $departement;
   $dm->medecin = $medecin;
   $dm->birthday = $birthday;
   $dm->phone = $phone;
   $dm->email = $email;
   $dm->dejap = $dejap;
   $dm->motif = $motif;
   $dm->name = $name;
   $dm->save();
   return "success";

}

public function req2(Request $request)
{
return dd($request);
}



public function showTable($id,$medid,$date){
$emp = Rdv::where([['medecin_id','=',$medid],['date','=',$date]])->get();
$h91 = array();
$h101 = array();
$h111 = array();
$h121 = array();
$h141 = array();
$h151 = array();
$h161 = array();
$h92 = array();
$h102 = array();
$h112 = array();
$h122 = array();
$h142 = array();
$h152 = array();
$h162 = array();


foreach ($emp as $em){
   //echo Patient::find($em->patient_id)->name."<br>";
   if($em->heure == '91') {
      array_push($h91,Patient::find($em->patient_id)->name);  
      array_push($h91,$em->id);  
      }
   if($em->heure == '101'){
       array_push($h101,Patient::find($em->patient_id)->name);  
       array_push($h101,$em->id);  

       }
   if($em->heure == '111'){
    array_push($h111,Patient::find($em->patient_id)->name);  
    array_push($h111,$em->id);  
   }
   if($em->heure == '121') {
   array_push($h121,Patient::find($em->patient_id)->name);  
   array_push($h121,$em->id);  
}
   if($em->heure == '141') {
   array_push($h141,Patient::find($em->patient_id)->name);  
   array_push($h141,$em->id);  
}
   if($em->heure == '151') {
   array_push($h151,Patient::find($em->patient_id)->name);  
   array_push($h151,$em->id);  
}
   if($em->heure == '161') {
   array_push($h161,Patient::find($em->patient_id)->name);
   array_push($h161,$em->id);  
}

   if($em->heure == '92'){
    array_push($h92,Patient::find($em->patient_id)->name);  
    array_push($h92,$em->id);  
   }
   if($em->heure == '102'){
    array_push($h102,Patient::find($em->patient_id)->name);  
    array_push($h102,$em->id);  
   }
   if($em->heure == '112'){
    array_push($h112,Patient::find($em->patient_id)->name);  
    array_push($h112,$em->id);  
   }
   if($em->heure == '122') {
   array_push($h122,Patient::find($em->patient_id)->name);    
   array_push($h122,$em->id);  
}
   if($em->heure == '142') {
   array_push($h142,Patient::find($em->patient_id)->name);    
   array_push($h142,$em->id);  
}
   if($em->heure == '152'){
    array_push($h152,Patient::find($em->patient_id)->name);  
    array_push($h152,$em->id);  
   }
   if($em->heure == '162'){
    array_push($h162,Patient::find($em->patient_id)->name);  
    array_push($h162,$em->id);  
   }

}
return view('layouts.rdv.table')->with('data',
['h91'=>$h91,'h101'=>$h101,'h111'=>$h111,'h121'=>$h121,'h141'=>$h141,'h151'=>$h151,'h161'=>$h161,
'h92'=>$h92,'h102'=>$h102,'h112'=>$h112,'h122'=>$h122,'h142'=>$h142,'h152'=>$h152,'h162'=>$h162,'patid'=>$id]

);

}


}
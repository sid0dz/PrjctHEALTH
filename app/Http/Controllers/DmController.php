<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;
use App\Patient;
use App\Dmrdv;
use Illuminate\Support\Facades\Auth;
use URL;
use Illuminate\Support\Facades\DB;
class DmController extends Controller
{

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

        public function indrd()
        {
                $dms = Dmrdv::all();
               
                return view('dashbord.secretary.rdvatt',['dms'=>$dms]);



        }




        
}
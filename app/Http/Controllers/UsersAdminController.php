<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Rdv;
use App\Patient;
class UsersAdminController extends Controller
{
    
    public function getUserslist(){
        $usersdata = User::all();
        return view('layouts.admin.show_users',['usersData' => $usersdata]);

    }

    public function modifyUser(){
        //Define Later
    }
    public function deleteUser(Request $request){
        //Define Later
        $usersdata = User::all();
        return view ('layouts.dashboard');

    }
    public function details($id){
        $user = User::find($id);
        $rdvs = Rdv::where('medecin_id','=',$id)->get(); 
    for($x=0;$x<count($rdvs);$x++){
$rdvs[$x]->medecin = Patient::find($rdvs[$x]->patient_id)->name;

    }
        return view('layouts.Admin.showUinfo',['user'=>$user,'rdvs'=>$rdvs]);


    }


}

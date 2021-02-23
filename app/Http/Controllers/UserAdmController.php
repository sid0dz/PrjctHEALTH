<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Clconfig;
class UserAdmController extends Controller
{
    public function getUserslist(){
        $usersdata = User::all();
        return view('layouts.admin.show_users',['usersData' => $usersdata]);

    }

    public function modifyUser(){
        //Define Later
    }


    public function addUser(Request $request){
      //  dd($request);
        $newUser= new User();
        $newUser->fname = $request->input('fname');
        $newUser->lname =$request->input('lname');
        $newUser->specialite =$request->input('specialite');
        $newUser->role =$request->input('role');
        $newUser->email =$request->input('email');
        $newUser->password = Hash::make($request->input('password'));
        $newUser->save();
        return view('layouts.admin.newUserSuc',['data'=>$request]);

    }


    public function deleteUser(Request $request){
        //Define Later
        $usersdata = User::all();
        return view('layouts.admin.show_users',['usersData' => $usersdata]);

    }
    public function siteconf(Request $request){
            $conf = Clconfig::first();
        //    dd($conf);
             $conf->sitename =$request->input('sitename');
             $conf->siteadress =$request->input('siteadress');
             $conf->siteadress2 =$request->input('siteadress2');
             $conf->siteemail =$request->input('siteemail');
             $conf->sitenumber =$request->input('sitenumber');
             $conf->debDegr= $request->input('degDeb');
             $conf->finDegr= $request->input('degFin');
             
            $conf->save();

            return view('layouts.Admin.configsite',['data'=>"success"]);
    }
    public function profilupd(Request $request){
        $user= User::find($request->input('medid'));
        
        if($request->input('fname')!=null) $user->fname =$request->input('fname'); 
        if($request->input('lname')!=null) $user->lname= $request->input('lname');
        if($request->input('email')!=null) $user->email= $request->input('email');
        if($request->file('avatar')!==null){
            $file = $request->file('avatar');
            if(str_contains($file->getMimeType(), 'image')){
                $destinationPath = 'uploads\avatar';
                $filename= "u_".$request->input('medid').".".$file->getClientOriginalExtension();
                $file->move($destinationPath,$filename);
                $user->avatar = $filename; 
        }}
        if($request->input('oldPassword')!=null)  {
            if(Hash::check($request->input('oldPassword'), $user->password)) 
            {
                if(strlen($request->input('newPassword'))>7) 
                $user->password= Hash::make($request->input('newPassword'));
                else return view('layouts.profil',['data'=>"Le mot de passe doit comprendre au moins 8 caracteres"]);
            
            }
            else return view('layouts.profil',['data'=>"Reverifier mot de passe"]);
            
        }

       
      /*  if($request->input('fname')!=null)
        if($request->input('fname')!=null)
        */
        $user->save();
        return view('layouts.profil',['data'=>"success"]);
    }   

}

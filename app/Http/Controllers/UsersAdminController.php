<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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



}

<?php

namespace App\Http\Controllers;
use App\Maladie;
use App\Allergie;
use App\Orientation;
use App\Commentaire;
use App\User;

use Illuminate\Http\Request;

class MedinfoController extends Controller
{

    public function newMaladie($patid,$medid,$info){
        $mednom = User::find($medid)->fname." ".User::find($medid)->lname; 
        $topic = new Maladie;
        $topic->type = $info;
        $topic->patient_id = $patid;
        $topic->medid = $medid;
        $topic->date = date('Y-m-d');
        $topic->save();
        return "<td>".date('d-m-Y')."</td><td>".$info."</td><td>".$mednom."</td>";        }
        public function newAllergie($patid,$medid,$info){
        $mednom = User::find($medid)->fname." ".User::find($medid)->lname; 
            $topic = new Allergie;
        $topic->type = $info;
        $topic->patient_id = $patid;
        $topic->medid = $medid;
        $topic->date = date('Y-m-d');
        $topic->save();
        return "<td>".date('d-m-Y')."</td><td>".$info."</td><td>".$mednom."</td>";
        }
        
    public function newCommentaire($patid,$medid,$info){
        $mednom = User::find($medid)->fname." ".User::find($medid)->lname; 
        $topic = new Commentaire;
        $topic->type = $info;
        $topic->patient_id = $patid;
        $topic->medid = $medid;
        $topic->date = date('Y-m-d');
        $topic->save();
        return "<td>".date('d-m-Y')."</td><td>".$info."</td><td>".$mednom."</td>";        }

        public function delOrientation($id){
            $orient = Orientation::find($id);
          // dd($orient);
            $orient->delete();
            return "success";                   


        }



}
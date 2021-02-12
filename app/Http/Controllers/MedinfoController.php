<?php

namespace App\Http\Controllers;
use App\Maladie;
use App\Allergie;
use App\Commentaire;

use Illuminate\Http\Request;

class MedinfoController extends Controller
{

    public function newMaladie($patid,$medid,$info){
        $topic = new Maladie;
        $topic->type = $info;
        $topic->patient_id = $patid;
        $topic->medid = $medid;
        $topic->date = date('Y-m-d');
        $topic->save();
        return "<td>".date('d-m-Y')."</td><td>".$info."</td><td> Medceinsadasd</td>";
        }
        public function newAllergie($patid,$medid,$info){
        $topic = new Allergie;
        $topic->type = $info;
        $topic->patient_id = $patid;
        $topic->medid = $medid;
        $topic->date = date('Y-m-d');
        $topic->save();
        return "<td>".date('d-m-Y')."</td><td>".$info."</td><td> Medceinsadasd</td>";
        }
        
    public function newCommentaire($patid,$medid,$info){
        $topic = new Commentaire;
        $topic->type = $info;
        $topic->patient_id = $patid;
        $topic->medid = $medid;
        $topic->date = date('Y-m-d');
        $topic->save();
        return "<td>".date('d-m-Y')."</td><td>".$info."</td><td> Medceinsadasd</td>";
        }



}
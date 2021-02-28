<?php

namespace App\Http\Controllers;

use App\Maladie;
use App\Allergie;
use App\Orientation;
use App\Media;
use App\Commentaire;
use App\User;
use App\Prescription;
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
        return "<td>".date('d-m-Y')."</td><td>".$info."</td><td>".$mednom."</td>";        
    }
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
            return "<td>".date('d-m-Y')."</td><td>".$info."</td><td>".$mednom."</td>";        
        }


        public function newImg(Request $request){
            $file = $request->file('file');
            $media = new Media;
            $media->name = $request->desc;
            $media->user_id = $request->user;
            $media->patient_id = $request->patient;
            $mednom = User::find($request->user)->fname." ".User::find($request->user)->lname; 

            if(str_contains($file->getMimeType(), 'image')){
                $destinationPath = 'uploads\img';
                $filename="i_"."@patid@".date('Y.m.d_h.i.s').".".$file->getClientOriginalExtension();
                $file->move($destinationPath,$filename);
                $media->link= "uploads/img/".$filename;
                
            }
        else if(str_contains($file->getMimeType(), 'pdf')){
            $destinationPath = 'uploads\doc';
            $filename="d_"."@patid@".date('Y.m.d_h.i.s').".".$file->getClientOriginalExtension();
            $file->move($destinationPath,$filename);
            $media->link= "uploads/doc/".$filename;


        }


            else return "fail";
            $media->save();    //$media->link
            return "<td>".date('d-m-Y')."</td><td>".$mednom."</td><td>".$request->desc."</td><td>
        	<a href='".asset($media->link)."' target='_blank' class='btn btn-primary btn-circle'  >
            <i class='fas fa-file-import'> </i>
			</a>
            </td>";        
        }



        
        public function delOrientation($id){
            $orient = Orientation::find($id);
          // dd($orient);
            $orient->delete();
            return "success";                   


        }  
        public function delMal($id){
            $orient = Maladie::find($id);
          // dd($orient);
            $orient->delete();
            return "success";                   


        }  
        public function delAlr($id){
            $orient = Allergie::find($id);
          // dd($orient);
            $orient->delete();
            return "success";                   


        }  
        public function delCom($id){
            $orient = Commentaire::find($id);
          // dd($orient);
            $orient->delete();
            return "success";                   


        }
        public function delImg($id){
            $orient = Media::find($id);
          // dd($orient);
            $orient->delete();
            return "success";                   


        }

        public function delPr($id){
            $orient = Prescription::find($id);
          // dd($orient);
            $orient->delete();
            return "success";                   


        }



}
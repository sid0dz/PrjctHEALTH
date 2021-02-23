<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadFileController extends Controller {
   public function index() {
      return view('upload');
   }
   
   public function showUploadFile(Request $request) {
      //dd($request);
      $file = $request->file('file');
	 
  if(str_contains($file->getMimeType(), 'image')||str_contains($file->getMimeType(), 'pdf')){


      //Display File Name
      echo 'useR: '. $request->user;
      echo '<br>';
      echo 'patient '. $request->patient;
      echo '<br>';
      echo 'File Name: '.$file->getClientOriginalName()." ".phpversion();
      echo '<br>';
  
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      $destinationPath = 'uploads';
      $file->move($destinationPath,"i_"."@patid@".date('Y.m.d_h.i.s').".".$file->getClientOriginalExtension());
      echo 'File Real Path: '.$file->getRealPath();

   }


}}
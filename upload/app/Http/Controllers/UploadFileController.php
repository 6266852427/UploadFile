<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;
use Html;
Use App\Http\Controllers\Controller;

Class UploadFileController extends Controller{
 Public function index(){
    Return view('components.uploadfile');
}
Public function showUploadFile(Request $request){
 $file = $request->file('image');
      //Display File Name
 Echo 'File Name: '.$file->getClientOriginalName();
 Echo '<br>';
// Display File Extension
 Echo 'File Extension: ' . $file->getClientOriginalExtension();
 Echo '<br>';
// Display File Real Path
 Echo 'File Real Path: '. $file->getRealPath();
 Echo '<br>';
// Display File Mime Type
 Echo 'File Mime Type: ' .$file->getMimeType();
// Move Uploaded File
 $destinationPath = 'uploads';
 $file->move($destinationPath, $file->getClientOriginalName());
}
}
?>
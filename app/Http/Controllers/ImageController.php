<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'file' => 'required|max:3072|mimes:jpg,png,jpeg'
        ]);

        try {

            $file = $request->file('file');
            $temp_folder = 'public/temp';

            // Unique name for temporary file
            $file_name = time() . '-' . $file->getClientOriginalName();
            $path = $file->storeAs($temp_folder, $file_name);

            return ['status'=>true,'message'=>"File Uploaded successfully",'file_name' => $file_name];
        }
        catch(Exception $ex) {
            return ['status'=>false,'message'=>"Failed to upload file...",'errmsg'=>$ex->getMessage()];
        }
    }
    public function handleUpload(Request $request){
    $image_path = $request->file('image')->store('images','public');
    return $image_path;
    }
}

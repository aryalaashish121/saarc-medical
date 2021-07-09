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
    public function getMedia(){
    //get media
    }
    public function handleUpload(Request $request){
        // dd($request->all());
        $request->validate([
        'image_name' => 'required|max:3072|mimes:jpg,png,jpeg'
        ]);

        try {

        $file = $request->file('image_name');

        $file_name = time() . '-' . $file->getClientOriginalName();
        $file_extension = $file->getClientOriginalExtension();
        $path = $file->storeAs('members', $file_name);
        $request->file('image_name')->move('members', $path);
        // $path = $file->move(public_path('images', $file_name));

        return ['status'=>true,'message'=>"File Uploaded successfully",'file_name' => $path];
        }
        catch(Exception $ex) {
        return ['status'=>false,'message'=>"Failed to upload file...",'errmsg'=>$ex->getMessage()];
        }
    }
}

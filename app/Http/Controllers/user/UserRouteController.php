<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRouteController extends Controller
{
    public function index(){
        return view('user.user');
    }
    public function getUser(){
    $user = User::with('membership')->where('id',Auth::user()->id)->first();

    return ['status'=>true,'data'=>$user,'message'=>'Current user data fetched'];
    }
    public function updateUserData(Request $request,$id){
    $this->validate($request, [
    'name'=>['required','min:5'],
    'email' => ['required','email'],
    'password' => 'required',
    ]);
    $hashedPassword = Auth::user()->password;

    if (Hash::check($request->password , $hashedPassword )) {
    try{
    $update_user = User::where('id',$id)->update($request->only('email','name'));
    return ['status'=>true,'message'=>"Your details updated successfully!"];

    }catch(Exception $err){
    return ['status'=>false,'message'=>$err->getMessage()];
    }
    }else{
    return ['status'=>false,'message'=>"Incorrect Current Password"];
    }
    }

    public function updatePassword(Request $request,$id){
    $this->validate($request, [
    'password' => 'required',
    'newpassword' => 'required|min:6',
    'confirmPassword' => 'required|same:newpassword',
    ]);

    $hashedPassword = Auth::user()->password;

    if (Hash::check($request->password , $hashedPassword )) {

    if (!Hash::check($request->newpassword , $hashedPassword)) {

    $users =User::find(Auth::user()->id);
    $users->password = bcrypt($request->newpassword);
    User::where( 'id' , Auth::user()->id)->update( array( 'password' => $users->password));
    return ['status'=>true,'message'=>'password updated successfully'];
    }
    else{
    return ['status'=>false,'message'=>'New password can not be the old password!'];
    }
    }
    else{
    return ['status'=>false,'message'=>'old password doesnt matched !'];
    }
    }
}

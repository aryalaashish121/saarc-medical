<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function index(){
     $current_user = Auth::user();
     $membership = Member::where('user_id',$current_user->id)->first();
    //  if (Member::where('user_id',$current_user->id)->exists()==false) {
    //     return ['status'=>false,'message'=>"Not a member yet!"];
    //  }
     if($membership){
        return ['status'=>true,'data'=>$membership];
     }
    
   }
}

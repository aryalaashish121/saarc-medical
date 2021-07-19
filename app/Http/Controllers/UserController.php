<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
   public function index(){
      $user = User::with('membership')->where('id',Auth::user()->id)->first();

      return ['status'=>true,'data'=>$user,'message'=>'Current user data fetched'];
      }
      public function update(Request $request){
      // dd($request->all());
   }
}

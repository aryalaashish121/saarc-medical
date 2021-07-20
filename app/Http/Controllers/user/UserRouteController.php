<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRouteController extends Controller
{
    public function index(){
        return view('user.user');
    }
    public function getUser(){
    $user = User::with('membership')->where('id',Auth::user()->id)->first();

    return ['status'=>true,'data'=>$user,'message'=>'Current user data fetched'];
    }
}

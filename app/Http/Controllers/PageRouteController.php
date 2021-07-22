<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRouteController extends Controller
{
    public function contactUs(){
        return view('pages.contactus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PageController extends Controller
{


    function about()
    {
        $user = Auth::user();
        
        return view('pages.about',['myvariable'=> 'Hello World']);
    }
}
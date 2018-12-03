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
    public function contact()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {

        $name = $request->name;

        return redirect()->route('thanks', ['name' => $name]);
    }

    function thanks($name, Request $request)
    {
        return view('pages.thankyou')->with(compact('name'));

    }

}
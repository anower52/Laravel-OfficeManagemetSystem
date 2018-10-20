<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index')
            ->with ('name', 'ABC')
            ->with ('email', 'anower@gmail.com')
            ->with ('hobbies', ['sports','travel']);
    }

    public function create()
    {
        return view('home.create');
    }
    public function posted(Request $request)
    {
//        return view(json_encode($request));
        return view('home.display')
            ->with('name', $request->myname)
            ->with('email', $request->myemail);
    }

}

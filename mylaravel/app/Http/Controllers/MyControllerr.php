<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myfunction(Request $request)
    {
        $data = $request->input('myinput');
        //dd($data);
        return view('myview', ['number' => $data]);
    }
}
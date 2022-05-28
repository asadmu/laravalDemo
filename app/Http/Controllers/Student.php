<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    public function add()
    {
        return view('addStudent');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'pass' => 'required|min:8',
            'img'=>'required|image|min:10|max:100',
        ]);
           
       // $s = $request->file('img')->getClientOriginalName();
       $s = $request->file('img')->store('public/uploads');
       echo $s;
        
        // var_dump($request->file());
        exit;
        //database code
          
        return view('addStudent');
    }
}

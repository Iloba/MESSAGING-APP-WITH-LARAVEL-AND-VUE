<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        
      
       
        return response()->json($request->all());
    }

    public function login(Request $request){
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        return response()->json('Hello');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => ['required', 'confirmed']
        ]);

        return response()->json('Hello');
    }
}

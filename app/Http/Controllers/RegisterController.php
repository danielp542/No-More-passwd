<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.registre');
    }
    public function registro(Request $request)
    {
        
        //validaciones
        $validated=$request->validate([
            'name'=>'required|max:30',
            'username'=>'required|unique:users|min:3|max:20',
            'email'=>'required|unique:users|email|max:70',
            'password'=>'required|confirmed|min:6'
        ]);
        
        User::create([
            'name'=>$request->name,
            'username'=> Str::slug($request->username),
            'email'=>$request->email,
            'password'=>Hash::make($request->password,)
        ]);
        //autenticacion de ususario
        auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        


        
        return redirect()->route('sisa');

    }
    
}

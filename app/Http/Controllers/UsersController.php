<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login(Request $request){

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            $user = User::where('email', $request->email)->first();
            if($user->is_admin()){
                return redirect()->route('tanamans');
            }else if($user->is_farmer()){
                return redirect()->route('dashboard');
            }
        }else{
            return redirect()->back()->withInput($request->only('email', 'password'))->withErrors([
                'email' => 'Email anda tidak terdaftar',]);
        }
    }
}

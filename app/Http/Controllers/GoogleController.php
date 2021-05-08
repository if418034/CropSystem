<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $finduser = User::where('google_id', $user->getId())->first();
        if($finduser){
            Auth::login($finduser);
            return redirect()->intended('tanamans');
        }else{
            $newUser = User::create([
                'name' => $user->getName(),
                'username' => $user->getEmail(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('cropsystemmemuiashr')
            ]);

            Auth::login($newUser);
            return redirect()->intended('dashboard');
        }
    }
}

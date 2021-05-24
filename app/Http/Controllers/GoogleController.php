<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $findadmin = User::where('google_id', $user->getId())->where('admin', 1)->first();
        $findfarmer = User::where('google_id', $user->getId())->where('farmer', 1)->first();
        $notfarmer = User::where('google_id', $user->getId())->where('farmer', 0)->first();
        if ($findadmin) {
            Auth::login($findadmin);
            return redirect()->intended('tanamans');
        } else if ($notfarmer) {
            return redirect('/unregistered');
        } else if ($findfarmer) {
            Auth::login($findfarmer);
            return redirect()->intended('crops');
        } else {
            $newUser = User::create([
                'name' => $user->getName(),
                'username' => $user->getEmail(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('cropsystemmemuiashr'),
            ]);

            Auth::login($newUser);
            return redirect()->intended('/unregistered');
        }
    }
}

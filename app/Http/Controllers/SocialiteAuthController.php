<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use DB;
use Exception;

class SocialiteAuthController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Google login authentication
     *
     * @return void
     */
    public function loginWithGoogle()
    {
        try {

            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->first();

            if($user){
                Auth::login($user);
                return redirect()->route('agent.dashboard');
            }

            else{
                $createUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'role_id' => '2',
                    'username' => $googleUser->name
                ]);

                Auth::login($createUser);
                return redirect()->route('agent.dashboard');
          

            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}

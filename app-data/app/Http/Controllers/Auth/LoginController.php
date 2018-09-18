<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;
use Auth;

use App\User;
use App\Task;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/tasks';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }




    public function redirect($provider)
    {
        return Socialite::with($provider)->redirect();
    }

    public function callback($provider)
    {
        $user = $this->userFindOrCreate(Socialite::driver($provider));
     
        //auth()->login($user);
        Auth::login($user, true);

        return redirect('/tasks');

    }

    public function userFindOrCreate($provider)
    {

        $providerUser = $provider->user();
 
        $providerName = class_basename($provider);
 
        $user = User::whereProvider($providerName)
            ->whereProviderId($providerUser->getId())
            ->first();
 
        if (!$user) {
            $user = User::create([
                'email' => $providerUser->getEmail(),
                'name' => $providerUser->getName(),
                'provider_id' => $providerUser->getId(),
                'provider' => $providerName
            ]);
        }
        
        return $user;
    }


}

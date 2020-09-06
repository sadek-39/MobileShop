<?php

namespace App\Http\Controllers\Auth;

use App\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

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
    // public function redirectToProvider()
    // {
    //     // return Socialite::driver('google')->setScopes(['read:user', 'public_repo'])->redirect();

    //     return Socialite::driver('google')->stateless()->redirect();
    // }

    // /**
    //  * Obtain the user information from google.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function handleProviderCallback()
    // {
    //     $user = Socialite::driver('google')->stateless()->user();

    //     return $user->name;
    // }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('facebook')->user();

        return $userSocial->name;
        // $user= new User;
        // $user->name=$userSocial->name;
        // $user->email=$userSocial->email;
        // $user->password=bcrypt('123456');
        // $user->save();
        // Auth::login($userSocial->email);
        // return view('pages.product');

    }
}

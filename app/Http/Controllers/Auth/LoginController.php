<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Laravel\Socialite\Facades\Socialite;
use App\API\LinkedIn;

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
        //dd(Socialite::driver('linkedin'));
        return Socialite::driver('linkedin')->redirect();
    }

    public function handleProviderCallback()
    {
        $LinkedIn = new LinkedIn();
        $linkedinUser = Socialite::driver('linkedin')->user();
        // dd($linkedinUser);
        $token = $linkedinUser->token;
        $expiresIn = $linkedinUser->expiresIn;
        $refresh = $linkedinUser->refreshToken;

        // dd($LinkedIn->getScopes());

        // $tokenUser = Socialite::driver('linkedin')->userFromToken($token);
        // $article = $LinkedIn->getArticlesByAuthor($token);
        // dd($token, $linkedinUser, $article);
        dd($token, $linkedinUser);
    }
}

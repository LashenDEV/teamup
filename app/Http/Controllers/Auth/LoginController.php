<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Notifications;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if (Auth()->user()->role == 1) {
            return route('admin.dashboard');
        } elseif (Auth()->user()->role == 2) {
            return route('president.dashboard');
        } elseif (Auth()->user()->role == 3) {
            return route('user.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (Auth()->user()->role == 1) {
                return redirect()->route('admin.dashboard');
            } elseif (Auth()->user()->role == 2) {
                if ((Notifications::where('user_id', Auth::user()->id)->first()) == null) {
                    $user = Auth::user();
                    Notifications::create([
                        'user_id' => $user->id,
                        'icon' => '<i class="fa-duotone fa-user-plus ml-2"></i>',
                        'show_to_admin' => 1,
                        'show_to_president' => 1,
                        'notification' => 'Registered president ' . $user->name . '.',
                    ]);
                }
                return redirect()->route('president.dashboard');
            } elseif (Auth()->user()->role == 3) {
                if ((Notifications::where('user_id', Auth::user()->id)->first()) == null) {
                    $user = Auth::user();
                    Notifications::create([
                        'user_id' => $user->id,
                        'icon' => '<i class="fa-duotone fa-right-to-bracket ml-2"></i>',
                        'show_to_admin' => 1,
                        'show_to_president' => 1,
                        'notification' => 'Registered user ' . $user->name . '.',
                    ]);
                }
                return redirect()->route('user.dashboard');
            }
        } else {
            return redirect()->route('login')->with('error', 'These credentials do not match our records.');
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

     protected $redirectTo='/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
    public function chatlogin(Request $request)
    {
      $this->validateLogin($request);
$email=$request->email;
$password=$request->password;
$user=User::where('email',$request->email)->first();
if ($user==false)
{
    $request->session()->put('exists?','The email that you have entered is not exists.');
    return redirect()->back();

}
if($user->is_confirmed())
  {
    Auth::attempt(['email'=>$email,'password'=>$password]);
    if (Auth::check()){
     return redirect()->route('dashboard');
    }
    else{
      $request->session()->put('email',$request->email);
      return redirect()->back();
    }
}
else {
    $request->session()->put('confirmed?','Please confirm your email.');
    return redirect()->back();
}
    }
    public function doLogin(Request $request)
    {
      $this->validateLogin($request);
$email=$request->email;
$password=$request->password;
$user=User::where('email',$request->email)->first();
if ($user==false)
{
    $request->session()->put('exists?','The email that you have entered is not exists.');
    return redirect()->route('loginfail');

}
if($user->is_confirmed())
  {
    Auth::attempt(['email'=>$email,'password'=>$password]);
    if (Auth::check()){
    if (Auth::user()->admin==1)
    {
      return redirect()->route('admin');
    }
    else{
     return redirect()->route('dashboard');
   }
    }
    else{
      $request->session()->put('email',$request->email);
      return redirect()->route('loginfail');
    }
}
else {
    $request->session()->put('confirmed?','Please confirm your email.');
    return redirect()->route('loginfail');
}

}
public function logout(Request $request) {
  Auth::guard()->logout();
          $request->session()->flush();
          $request->session()->regenerate();
          return redirect()->route('shoppe');
}
public function forget(Request $request){
  $request->session()->forget('email');
  $request->session()->forget('exists?');
  $request->session()->forget('confirmed?');
  return view('mypage.index');
}

}

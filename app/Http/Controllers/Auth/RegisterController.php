<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use App\Mail\ConfirmationEmail;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth;
use Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     public function homepage()
     {
        return view('mypage.index');
     }
    protected function validator(array $data)
    {

      $rules=[
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'confirmed|required|min:8',
      ];
      $error_message=[
        'confirm.required'=>'Confirm field is required.',
        'confirm.same'=>'password must match same value',
      ];
  return Validator::make($data,$rules,$error_message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname'=>$data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'contact' => $data['contact'],
        ]);
    }
    protected function register(Request $request)
{
  $input=$request->all();
  $validator=$this->validator($input);
  $this->validator($input)->validate();
  if($validator->passes()){
    $data=$this->create($input)->toArray();
    $data['token']=str_random(25);
    $user=User::find($data['id']);
    $user->token=$data['token'];
    $user->save();
    Mail::send('mails.confirmation',$data,function($message)use($data){
      $message->to($data['email']);
      $message->subject('Registration Confirmation');
    });
    return back()->with('status','Confirmation email has been send.Please check your email.');
  }

  return back()->with('status',$validator->errors());
}
public function confirmEmail($token)
{
$user=User::where('token',$token)->first();
if(!is_null($user)){
    $user->confirmed=1;
    $user->token='';
    $user->save();
    return redirect(url('shoppe'))->with('status','Your Activation is complete.');
}
return redirect(url('registration'))->with('status,','Something went wrong.');
}
}

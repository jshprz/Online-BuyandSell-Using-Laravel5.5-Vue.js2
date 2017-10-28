<?php

namespace App\Http\Controllers;
use App\Chat;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Events\ChatSent;
class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');

     }
     public function chat()
 {
    return view('mypage.productPage');
 }
 public function index()
 {
   $chat=Chat::with('user')->get();
   return response()->json(['message'=>$chat]);
 }


 public function send(Request $request)
 {
  $sender = Auth::user();
  $message=$sender->messages()->create([
     'chat'=>$request->get('chat')
   ]);
   broadcast(new ChatSent($message,$sender));
 }
// public function send()
//   {
//   $message='hello';
  // $user=User::find(Auth::id());
   //event(new ChatEvent($message,$user));
//}

}

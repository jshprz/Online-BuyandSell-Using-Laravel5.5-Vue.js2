<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class LoginfailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function loginfail(){
       return view('mypage.loginfails');
     }
    public function index(Request $request)
    {
      $email=$request->session()->get('email');
      $exists=$request->session()->get('exists?');
      $confirmed=$request->session()->get('confirmed?');
      $user=User::where('email',$email)->first();
        $response1=[
          'email'=>'Your email is correct but your password is not.',
        ];
        $response2=[
          'exists'=>'The email that you have entered is not exists.'
        ];
        $response3=[
          'confirmed'=>'Please confirm your email.',
        ];
        if (isset($exists)) {
            return response()->json($response2);
        }
        else if(isset($confirmed)){
            return response()->json($response3);
        }
        else if(isset($email)){
        return response()->json($response1);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

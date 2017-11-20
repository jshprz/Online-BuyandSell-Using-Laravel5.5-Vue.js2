<?php

namespace App\Http\Controllers;

use App\current_chatmate;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class GetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getitem(){
       return view('mypage.item');
     }
     public function index()
    {
      $get=DB::table('current_chatmate')
      ->where('sender_id','=',Auth::user()->id)
      ->join('users','current_chatmate.receiver_id','=','users.id')
      ->select('current_chatmate.*', 'users.firstname','users.lastname','users.image')
      ->get();
      $response=[
        'chatmate'=>$get
      ];
      return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      if (Auth::check()) {
        $description=$request->session()->put('description',$request->description);
        $price=$request->session()->put('price',$request->price);
        $contact=$request->session()->put('contact',$request->contact);
        $created=$request->session()->put('created',$request->created);
        $photo=$request->session()->put('photo',$request->photo);
        $city=$request->session()->put('city',$request->city);
        $firstname=$request->session()->put('firstname',$request->firstname);
        $lastname=$request->session()->put('lastname',$request->lastname);
        $id=$request->session()->put('id',$request->id);
        return redirect()->route('authitem');
      }
      else{
          $id=$request->session()->put('id',$request->id);
        $description=$request->session()->put('description',$request->description);
        $price=$request->session()->put('price',$request->price);
        $contact=$request->session()->put('contact',$request->contact);
        $created=$request->session()->put('created',$request->created);
        $photo=$request->session()->put('photo',$request->photo);
        $city=$request->session()->put('city',$request->city);
        $firstname=$request->session()->put('firstname',$request->firstname);
        $lastname=$request->session()->put('lastname',$request->lastname);
      return view('mypage.item');
}
    }
    public function currentCategory(Request $request)
    {
      $category=$request->session()->put('category',$request->category);
      return redirect()->route('productsection');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
if (Auth::user()->id == $request->session()->get('id')) {
  return redirect()->route('dashboard');
}

    $store=DB::table('current_chatmate')->insert(
      ['sender_id'=>Auth::user()->id,'receiver_id'=>$request->session()->get('id')]
    );
    return redirect()->route('dashboard');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

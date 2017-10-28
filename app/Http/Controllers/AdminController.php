<?php

namespace App\Http\Controllers;

use App\product;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use response;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function AdminReturn(){
       return view('mypage.admin');
     }
    public function index()
    {
      $get=DB::table('product')->where('approved','=',null)->get();
      $response=[
        'items'=>$get
      ];
      return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
      $approve=DB::table('product')->where('id',$id)->update(['approved' => 1]);
      $response=[
        'fillitems'=>$approve,
      ];

      DB::table('users')->where('id','=',$request->myid)
      ->increment('total_sell_product');

  return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      product::find($id)->delete();
      return response()->json(['done']);
    }
}

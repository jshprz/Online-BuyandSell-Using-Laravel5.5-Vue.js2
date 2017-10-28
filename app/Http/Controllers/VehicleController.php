<?php

namespace App\Http\Controllers;

use App\product;
use App\User;
use Illuminate\Support\Facades\DB;
use response;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
  public function index()
  {
      $where=[
        ['approved','=',1],
        ['category','=','Vehicle'],
        ['sold','=',null],
      ];
      $get=DB::table('product')
      ->where($where)
      ->join('users','product.user_id','=','users.id')
      ->select('product.*', 'users.firstname','users.lastname','users.image')
      ->latest()
      ->paginate(3);
    $response=[
      'pagination'=>[
        'total'=>$get->total(),
        'per_page'=>$get->perPage(),
        'current_page'=>$get->currentPage(),
        'last_page'=>$get->lastPage(),
        'from'=>$get->firstItem(),
        'to'=>$get->perPage(),
      ],
      'approveditems'=>$get
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

  }

}

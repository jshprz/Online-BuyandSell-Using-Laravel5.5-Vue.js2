<?php

namespace App\Http\Controllers;
use App\User;
use App\Chat;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
class UploadImageController extends Controller
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
     public function uploadReturn(){
       return view('mypage.productPage');
     }
    public function index(Request $request)
    {
      $userid=[
        ['user_id','=',Auth::id()],
        ['approved','=',1],
      ];
        $get=DB::table('product')->where($userid)->get();
        $chat=Chat::with('user')->get();
      $response=[
  'items'=>$get,
  'message'=>$chat
      ];

      return response()->json($response);

  }


    /** public function create(array $data)
    {
      return pending_product::create([
        'product_description'=>$data['description'],
        'seller_location'=>$data['location'],
        'product_price'=>$data['price'],
        'contact'=>$data['contact'],
        'category'=>$data['category'],
      ]);
    }
    public function uploadReturn(){
      return view('mypage.productPage');
    }
    public function upload(Request $request)
    {
    $exploded=explode(',',$request->image);
    $decoded=base64_decode($exploded[0]);
    if (str_contains($exploded[0],'jpeg'))
    {
      $extension='jpg';
    }
    else {
      $extension='png';
    }
    $filename=str_random().'.'.$extension;
    $path=public_path('img').'.'.$filename;
    $exploded=explode(',',$request->image);
    $decoded=base64_decode($exploded[0]);
    if (str_contains($exploded[0],'jpeg'))
    {
      $extension='jpg';
    }
    else {
      $extension='png';
    }
    $filename=str_random().'.'.$extension;
    $path=public_path('img').'.'.$filename;
    $exploded=explode(',',$request->image);
    $decoded=base64_decode($exploded[0]);
    if (str_contains($exploded[0],'jpeg'))
    {
      $extension='jpg';
    }
    else {
      $extension='png';
    }
    $filename=str_random().'.'.$extension;
    $path=public_path('img').'.'.$filename;

      $input=$request->all();
        $data=$this->create($input)->toArray();
        $data['image']=$request->image;
        $data['user_id']=Auth::id();
        $pending=pending_product::find($data['id']);
        $pending->product_image=$data['image'];
        $pending->user_id=$data['user_id'];
        $pending->save();

        $response=[
          'newItem'=>$data,
          'newItem'=>$pending->product_image=$data['image'],
          'newItem'=>$pending->user_id=$data['user_id'],
        ];
        return response()->json($response);

}
*/

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $exploded=explode(',',$request->product_image);
    if (str_contains($exploded[0],'jpeg')){

        $extension='png';
    }
    else{
          $extension='jpg';
}
    $filename=str_random().'.'.$extension;
    $request->product_image->storeAs('public/product',$filename);
    $pending=product::create($request->except('product_image')+[
      'user_id'=>Auth::id(),
      'product_image'=>$filename,
    ]);

    return redirect()->back();
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
  public function update(Request $request,$id)
  {
    $update=User::find($id)->update($request->all());
    return redirect()->route('dashboard');
  }
  public function settings()
  {
    return view('mypage.Setting');
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

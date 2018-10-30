<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\User;
use JWTAuthException;
use DB;

class RoomsController extends Controller
{   
   
    public function __construct()
    {
        
     
    }

    
     public function index(Request $request)
     {

        $rooms = DB::table('rooms')->get();
        return response()->json(['status'=>true,'message'=>'Rooms successfully','data'=>$rooms]);
  
     }

     public function store(Request $request)
     {


        $data = json_decode(file_get_contents('php://input'), true);
        $data['created_at'] = date("Y-m-d H:i:s");
        $rooms = DB::table('rooms')->insert($data);

        $return = DB::table('rooms')->orderBy('id','desc')->limit(1)->get();
        return response()->json(['status'=>true,'message'=>'Rooms created successfully','data'=>$return]);


     }


     public function update($id,Request $request)
     {
        $data = json_decode(file_get_contents('php://input'), true);
        $data['updated_at'] = date("Y-m-d H:i:s");
        $rooms = DB::table('rooms')->where('id',$id)->update($data);

        $return = DB::table('rooms')->where('id',$id)->get();
        return response()->json(['status'=>true,'message'=>'Rooms Update successfully','data'=>$return]);

     }

     public function destroy($id,Request $request)
     {

       $return = DB::table('rooms')->where('id',$id)->delete();
       return response()->json(['status'=>true,'message'=>'Rooms Delete successfully']);


     }
    
    
}
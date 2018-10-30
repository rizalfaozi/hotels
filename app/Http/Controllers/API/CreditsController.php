<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class CreditsController extends Controller
{   
   
    public function __construct()
    {
        
     
    }

    
     public function index(Request $request)
     {

        $chats = DB::table('chats')->get();
        return response()->json(['status'=>true,'message'=>'Chats successfully','data'=>$chats]);
  
     }

     public function store(Request $request)
     {

        $user_kridit = Auth::user()->kridit;
        $data = json_decode(file_get_contents('php://input'), true);
        if($user_kridit !=0)
        {  
         
        
        $data['user_id'] = Auth::user()->id;
        $data['created_at'] = date("Y-m-d H:i:s");
        $chats = DB::table('chats')->insert($data);
        //update Credits
        
        $kridit = $user_kridit-5;
        DB::table('users')->where('id',Auth::user()->id)->update(['kridit'=>$kridit]);

        $return = DB::table('chats as a')
                    ->select('a.id','b.name','b.kridit','a.description','a.created_at')
                      ->join('users as b','b.id','=','a.user_id')
                ->orderBy('id','desc')->limit(1)->get();
        return response()->json(['status'=>true,'message'=>'Chat created successfully','data'=>$return]);
    }else{


        return $this->plusCredit($data['description']);
    }


     }


    public function plusCredit($description)
    {
         $user = Auth::user();
         $check = DB::table('chats as a')
                    ->select('a.id','b.name','b.kridit','a.description','a.created_at')
                      ->join('users as b','b.id','=','a.user_id')
                        ->orderBy('id','desc')
                ->first();

          $dateNow =  date("m");

          $timestamp = strtotime($check->created_at);
          $mounth = date("m", $timestamp);
          //tambah kridit perbulan
          if($dateNow !=$mounth)
          {
                if($user->type =="biasa")
                {
                    
                    $kridit = "20";
                    $hasil = $kridit-5;
                    DB::table('users')->where('id',$user->id)->update(['kridit'=>$hasil]);

                }else{
                   $kridit = "40";
                   $hasil = $kridit-5;
                   DB::table('users')->where('id',$user->id)->update(['kridit'=>$hasil]); 
                    
                }

                //tambah chat dikurangi kridit insert
                $data['user_id'] = $user->id;
                $data['description'] = $description;
                $data['created_at'] = date("Y-m-d H:i:s");

                $chats = DB::table('chats')->insert($data);

                $return = DB::table('chats as a')
                            ->select('a.id','b.name','b.kridit','a.description','a.created_at')
                              ->join('users as b','b.id','=','a.user_id')
                        ->orderBy('id','desc')->limit(1)->get();
                return response()->json(['status'=>true,'message'=>'Chat created successfully','data'=>$return]);

          }else{
                //kridit kosong
              return response()->json(['status'=>false,'message'=>'Credit null'], 500);    
          }  
       
           

    }
    
    
}
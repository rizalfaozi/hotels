<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\User;
use JWTAuthException;
class UserController extends Controller
{   
    private $user;
    public function __construct(User $user){
        $this->user = $user;
    }
   
    public function registerPemilik(Request $request){

       $data = json_decode(file_get_contents('php://input'), true);

        $user = $this->user->create([
          'name' => $data['name'],
          'email' => $data['email'],
          'status' => '1',
          'type'   => '',
          'kridit' => '',
          'access' => 'pemilik',
          'password' => bcrypt($data['password'])
        ]);
        return response()->json(['status'=>true,'message'=>'User created successfully','data'=>$user]);
    }


     public function registerPengguna(Request $request){

       $data = json_decode(file_get_contents('php://input'), true);

       
        $user = $this->user->create([
          'name' => $data['name'],
          'email' => $data['email'],
          'status' => '1',
          'type'   => 'biasa',
          'access' => 'pengguna',
          'kridit' => '20',
          'password' => bcrypt($data['password'])
        ]);
        return response()->json(['status'=>true,'message'=>'User created successfully','data'=>$user]);
    }


    
    public function login(Request $request){

        $credentials = json_decode(file_get_contents('php://input'), true);
        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
    }
    public function getAuthUser(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }
}
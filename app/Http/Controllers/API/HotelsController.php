<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class HotelsController extends Controller
{   
   
    public function __construct()
    {
        
     
    }

    
     public function index(Request $request)
     {



        $rooms = DB::table('rooms as a')
        ->select('a.id','a.name','b.company','c.name as provinces','a.price','a.count','a.status','a.type','a.created_at')
        ->join('users as b','b.id','=','a.user_id')
        ->join('provinces as c','c.id','=','a.provinces_id')
        ->get();


        return response()->json(['status'=>true,'message'=>'Rooms hotels successfully','data'=>$rooms]);
  
     }

      public function detail($id,Request $request)
     {



        $rooms = DB::table('rooms as a')
        ->select('a.id','a.name','b.company','c.name as provinces','a.price','a.count','a.description','a.status','a.type','a.created_at')
        ->join('users as b','b.id','=','a.user_id')
        ->join('provinces as c','c.id','=','a.provinces_id')
        ->where('a.id',$id)
        ->get();


        return response()->json(['status'=>true,'message'=>'Rooms hotels successfully','data'=>$rooms]);
  
     }

     //pencarian berdasarkan nama /kota / harga
     public function search(Request $request)
     {

        $input = json_decode(file_get_contents('php://input'), true);
        $search = $input['search'];
        $city = $input['city'];
        $price = $input['price'];


        $rooms = DB::table('rooms')->where(['name'=>$search])->first();

        //jika room / nama hotel kosong
        if(empty($search))
        {
            if(empty($city))
            {
                return $this->filter5($price);
            }else if(empty($price)){
                return $this->filter4($city);    
            }else{
               return $this->filter1($search,$city,$price);

            }    
        }else if(empty($rooms)){
         //cari berdasarkan nama hotel
            
          return $this->filter2($search,$city,$price);     
           
         
        }else{
         //cari berdasarkan nama room
         return $this->filter3($search,$city,$price); 

        }    

        


     }


     public function filter1($search,$city,$price){

        if(empty($search))
        {    

            $rooms ="";

        }else{
                
         $rooms = DB::table('rooms as a')
        ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
        ->join('users as b','b.id','=','a.user_id')
        ->join('provinces as c','c.id','=','a.provinces_id')
        ->where(['c.name'=> $city,'a.price'=>$price])
        ->get();


        }

 

        return response()->json(['status'=>true,'message'=>'Rooms hotels successfully','data'=>$rooms]);



     }


     public function filter2($search,$city,$price)
     {

        if(empty($city))
        {
            if(empty($price))
            {

                $rooms = DB::table('rooms as a')
                ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
                ->join('users as b','b.id','=','a.user_id')
                ->join('provinces as c','c.id','=','a.provinces_id')
                ->where('b.company', 'like', ''.$search.'%')
                ->get();



            }else{
                //jika di isi price
                    $rooms = DB::table('rooms as a')
            ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
            ->join('users as b','b.id','=','a.user_id')
            ->join('provinces as c','c.id','=','a.provinces_id')
            ->where('a.price', $price)
            ->where('b.company', 'like', ''.$search.'%')
            ->get();


            }


        }else{

            //jika di isi city
              $rooms = DB::table('rooms as a')
            ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
            ->join('users as b','b.id','=','a.user_id')
            ->join('provinces as c','c.id','=','a.provinces_id')
            ->where(['c.name'=> $city,'a.price'=>$price])
            ->where('b.company', 'like', ''.$search.'%')
            ->get();   

        }    

         
        
   

         return response()->json(['status'=>true,'message'=>'Rooms hotels successfully','data'=>$rooms]);    
          

     } 


     public function filter3($search,$city,$price)   
     { 

        if(empty($city))
        {
            if(empty($price))
            {

                     $rooms = DB::table('rooms as a')
                ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
                ->join('users as b','b.id','=','a.user_id')
                ->join('provinces as c','c.id','=','a.provinces_id')
                ->where('a.name', 'like', ''.$search.'%')
                ->get();

            }else{

                 //jika di isi price   
                   $rooms = DB::table('rooms as a')
                ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
                ->join('users as b','b.id','=','a.user_id')
                ->join('provinces as c','c.id','=','a.provinces_id')
                ->where('a.price', $price)
                ->where('a.name', 'like', ''.$search.'%')
                ->get();
            }

        }else{
             //jika di isi city

                $rooms = DB::table('rooms as a')
                ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
                ->join('users as b','b.id','=','a.user_id')
                ->join('provinces as c','c.id','=','a.provinces_id')
                ->where(['c.name'=> $city])
                ->where('a.name', 'like', ''.$search.'%')
                ->get();

        }        
  

         return response()->json(['status'=>true,'message'=>'Rooms hotels successfully','data'=>$rooms]);

     }  


     public function filter4($city)
     {
       
            if(!empty($city))
            {    
          
             $rooms = DB::table('rooms as a')
                ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
                ->join('users as b','b.id','=','a.user_id')
                ->join('provinces as c','c.id','=','a.provinces_id')
                ->where('c.name', 'like', ''.$city.'%')
                ->get(); 
             
            }else{
                $rooms = "";
            }   

         return response()->json(['status'=>true,'message'=>'Rooms hotels successfully','data'=>$rooms]);    

        

     }  

      public function filter5($price)
     {
       
        if(!empty($price))
        {
          
             $rooms = DB::table('rooms as a')
                ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
                ->join('users as b','b.id','=','a.user_id')
                ->join('provinces as c','c.id','=','a.provinces_id')
                ->where('a.price', 'like', ''.$price.'%')
                ->get(); 
        }else{
            $rooms = "";
        }
             
                  

         return response()->json(['status'=>true,'message'=>'Rooms hotels successfully','data'=>$rooms]);    

        

     }  

     //jumlah kamar yg tersedia / harga
     public function filterattribut(Request $request)
     {
        $data = json_decode(file_get_contents('php://input'), true);
        $price =  $data['price'];
        $name =  $data['name'];
        
        if(empty($name))
        {    


         $rooms = DB::table('rooms as a')
                ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
                ->join('users as b','b.id','=','a.user_id')
                ->join('provinces as c','c.id','=','a.provinces_id')
                ->where('a.price', $price)
                ->get(); 


         }else if(empty($price)){

            $rooms = DB::table('rooms as a')
                ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
                ->join('users as b','b.id','=','a.user_id')
                ->join('provinces as c','c.id','=','a.provinces_id')
                ->where('a.name', $name)
                ->get(); 

         }else{

              $rooms = DB::table('rooms as a')
                ->select('a.id','a.name','b.company','c.name as city','a.price','a.count','a.status','a.type','a.created_at')
                ->join('users as b','b.id','=','a.user_id')
                ->join('provinces as c','c.id','=','a.provinces_id')
                ->where(['a.name'=> $name,'a.price'=> $price])
                ->get(); 
         }       

        return response()->json(['status'=>true,'message'=>'Rooms hotels successfully','data'=>$rooms]);       
     }

    
    
    
}
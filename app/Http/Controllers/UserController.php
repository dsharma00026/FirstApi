<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
   function getData(){

    return Users::all();

   }

   function addData(Request $request){
    
   $rules = [
        "id"   => 'required|numeric',
        "name" => 'required|min:3',
        "age"  => 'required|numeric',
        "city" => 'required'
    ];
   
    $validation=Validator::make($request->all(),$rules);
    if ($validation->fails()) {
        return response()->json([
            'status' => 'error',
            'errors' => $validation->errors()
        ], 422);
    }else{
      $check= Users::insert([
        "id"=>$request->id,
        "name"=>$request->name,
    
        "age"=>$request->age,
        "city"=>$request->city
    ]);

     if($check){
       return "data added succesfully";
     }else{
       return "data not  added succesfully";
     }
   
    }
    
  
   
   
   }

   function update(Request $request){
    $user=new Users();


    $users=Users::find($request->id);
    $users->id=$request->id;
    $users->name=$request->name;
    $users->age=$request->age;
    $users->city=$request->city;
    $users->save();

    
    

   }

   function delete(Request $request){
    $check=Users::destroy($request->id);
    if($check){
        return ['result'=>'data deleted'];
    }else{
        return ['result'=>'data not deleted'];
    }

   }
}

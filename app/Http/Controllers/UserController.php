<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
   function getData(){

    return Users::all();

   }

   function addData(Request $request){
    
   
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

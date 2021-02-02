<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Device;
use Validator;

class UserController extends Controller
{
    function index(){
        $collection= Http::get('https://reqres.in/api/users?page=1');
        return view('users',['collection'=>$collection['data']]);
    }
      function login(Request $req)
      {
        $data= $req->input('user');
        $req->session()->flash('user',$data);
        return redirect('add');
      }
     function uploadFile(Request $req)
      {
         return $req->file('file')->store('docs');
      }
      //Post Api
      function add(Request $req)
      {
          $device=new Device;
          $device->name=$req->name;
          $device->member_id=$req->member_id;
          $result=$device->save();
          if($result)
          {
            return ["result"=>"Data has been saved"];
          }
          else
          {
          return ["result"=>"operation has been failed"];
          }
      }
      function update(Request $req)
      {
        $device=Device::find($req->id);
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result)
        {
          return ["result"=>"Data has been updated"];
        }
        else
        {
        return ["result"=>"data update has been failed"];
        }
      }
      function delete($id)
      {
        $device=Device::find($id);
        $result=$device->delete();
        if($result)
        {
        return ["result"=>"record  has been deleted".$id];
        }
        else{
          return ["result"=>"delete operation failed"];
        }
      }
      function search($name)
      {
        return Device::where("name","like","%".$name."%")->get();
        
      }
      function testData(Request $req)
      {
        $rules=array(
          "name"=>"required",
          "member_id"=>"required |max:4"
        );
        $validator= Validator::make($req->all(),$rules);
        if($validator->fails()){
          return response()->json($validator->errors(),401);
        }
        else{
          $device=new Device;
          $device->name=$req->name;
          $device->member_id=$req->member_id;
          $data=$device->save();
          if($data)
          {
            return ["result"=>"Data has been saved"];
          }
          else
          {
          return ["result"=>"operation has been failed"];
          }
        }
        
        
      }
 }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserControl extends Controller
{
  protected $crud;
  public function __construct(UserModel $crud) // dependency injection
  {
    $this->crud = $crud;
  }
    public function Register(Request $request){
      $crud = [
        "name"     => $request->name,
        "email"    => $request->email,
        "password" => md5($request->password)
      ];
      $add = $this->crud->create($crud); //queery insert
      if($add == true){
        return "Successfully Added!";
      }
      else{
        return "Failed";
      }
    }
    public function all(){
      $all =$this->crud->all(); // select all from table crud
      return view("all")->with('Members',$all);
    }
    public function showdetail($id){
      $show = $this->crud->where('id', $id)->find($id);
      return $show;
    }
    public function delete($id){
      $del = $this->crud->where('id', $id)->delete();
      if($del){
        return "DELETED";
      }
      else{
        return "Delete FAILED";
      }
    }
    public function update($id){
      $up =$this->crud->find($id);
      return view("update")->with('Update',$up);
    }

    public function updaterecord(Request $request,$id){
      $query = $this->crud->where('id',$id)->find($id);
        if($request->password == $query->password)
        {
          $query->name =$request->name;
          $query->email=$request->email;
          $query->password =$request->password;
        }
        else {
          $query->name =$request->name;
          $query->email=$request->email;
          $query->password = md5($request->password);
        }
        $update =  $query->save();
        if($update)
        {
          return "Successfully updated!";
        }
        else {
          return "Failed";
        }
    }
}

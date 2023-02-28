<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $data = User::all();
        return view('user.index',['users'=>$data]);
    }  
    
    public function show($id){
        $data=array(
        "id"=>$id,
        "name"=>"MadaniaPanganadmun",
        "age"=>22,
        "email"=>"pangandamanmadania@gmail.com"
        );

        return view('user', $data);
    }
}

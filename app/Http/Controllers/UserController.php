<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return 'Hello from userController';
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

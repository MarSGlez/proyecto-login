<?php

namespace App\Controllers;
use App\Models\User;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function login()
    {
        $data = json_decode($this->request->getPost("datos"));
        $userModel = new User();
        $user = $userModel->where('correo',$data->name)->where('passwrod',$data->pass)->first();
        if($user){
            $response = 1;

        }else{
            $response = 0;
        }
        
        return json_encode($response);
    }
}

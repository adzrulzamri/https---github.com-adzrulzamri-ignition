<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function login()
    {
        return view('login/header')
        .view('login')
        .view('login/footer');
    }
    public function signup()
    {
        return view('login/header')
        .view('register')
        .view('login/footer');
    }
    public function main(){
        return view('login/header')
        .view('main')
        .view('login/footer');
    }
    public function profile(){
        $data = array();

        $data['name'] = "muhammad adzrul bin mohd zamri";
        $data['username'] = "roy";
        $data['email'] = "adzrulzamri5@gmail.com";
        $data['password'] = "123456";
        
        return view('login/header')
        .view('profile',$data)
        .view('login/footer');
    }
}

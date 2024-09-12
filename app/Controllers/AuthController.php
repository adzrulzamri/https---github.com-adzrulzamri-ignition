<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

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

    public function process()
    {
        $userModel = new UserModel();
        $fullname = $this->request->getPost('name');
        $username = $this->request->getPost('username');
        $password = $this->request->getpost('password');
        $email = $this->request->getPost('email');

        $data = [
            'fullname' => $fullname,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'email'=>$email,
        ];
        
    $checkUser = $userModel->where('username',$username)->first();
    if ($checkUser) {
        return redirect()->to('/register')->with('error','Username already exists');
    }
    $userModel->insert($data);
    return redirect()->to('/login')->with('success','register success');

    }

    public function pro_login(){

        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getpost('password');


        $data = [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];
    $checkUser = $userModel->where('email',$email)->first();
    if ($checkUser && password_verify($password,$checkUser['password'])) {
        session()->set([
            'fullname' => $checkUser['fullname'],
            'username' => $checkUser['username'],
            'email'=>$checkUser['email'],
            'isLoggedIn' => true,
        ]);
        return redirect()->to('/profile');
    } else{
        return redirect()->back()->with('error','Invalid Crendentials');
    }

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
    public function process_logout(){
        session()->destroy();
        return redirect()->to('/login');

    }
}

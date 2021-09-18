<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{

    public function index()
    {
        $data = ['tittle' => 'Login Page'];
        helper(['form']);
        return view('login', $data);
    }

    public function auth()
    {
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if ($data) {
            $pass = $data['user_password'];
            // $verify_pass = password_verify($password, $pass);
            if ($pass == $password) {
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'user_picture'  => $data['user_picture'],
                    'logged_in'     => TRUE
                ];
                $this->session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $this->session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $this->session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}

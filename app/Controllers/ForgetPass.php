<?php

namespace App\Controllers;

use App\Models\UserModel;

class ForgetPass extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = ['tittle' => 'Forget Password'];
        return view('forget_pass', $data);
    }
    public function send_pass()
    {
        helper('text');
        $model = new UserModel();
        $mail = $this->request->getVar('email');
        $data = $model->where('user_email', $mail)->first();
        if ($data) {
            $pass = $data['user_password'];
            $email = \Config\Services::email();
            $email->setTo($mail);
            $email->setSubject('Forget Password');
            $email->setMessage('Your password is : <h1> <b>' . $pass . '</b></h1>');
            $email->send();
            $this->session->setFlashdata('msg', 'Please check your email');
            return redirect()->to('/login');
        } else {
            $this->session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/forget');
        }
    }
}

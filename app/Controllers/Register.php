<?php

namespace App\Controllers;

class Register extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new \App\Models\UserModel();
    }

    public function index()
    {
        /* include helper form */
        helper(['form']);
        $data = [
            'validation' => \Config\Services::validation(),
            'tittle' => 'Register Page'
        ];
        return view('register', $data);
    }

    public function save()
    {
        /* include helper form */
        helper(['form']);
        /* set rules validation form */

        if (!$this->validate([
            'name'          => 'required|min_length[3]|max_length[100]',
            'email'         => [
                'rules' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.user_email]',
                'errors' => [
                    'is_unique' => 'already regitered',
                    'valid_email' => 'please use valid email'
                ]
            ],
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'password not match'
                ]
            ],
            'picture' => [
                'rules' => 'uploaded[picture]|max_size[picture,10240]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'please upload a picture',
                    'max_size' => 'max 10mb',
                    'is_image' => 'not picture',
                    'mime_in' => 'not picture',
                ]
            ]
        ])) {
            return redirect()->to('/register')->withInput();
        } else {

            $filePicture = $this->request->getFile('picture');
            $namePicture = $filePicture->getRandomName();
            $filePicture->move('img', $namePicture);
            $this->model->save([
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_picture'  => $namePicture,
                // 'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                'user_password' => $this->request->getVar('password')
            ]);
            session()->setFlashdata('msg', 'Successfully created ');
            return redirect()->to('/login');
        }
    }
}

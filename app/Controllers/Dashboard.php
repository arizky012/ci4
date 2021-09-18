<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Dashboard',
            'user_name'     =>  session()->get('user_name'),
            'user_email'    =>  session()->get('user_email'),
            'user_picture'  =>  session()->get('user_picture'),

        ];
        return view('dashboard', $data);
    }
}

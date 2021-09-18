<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['tittle' => 'Dashboard'];
        return view('dashboard', $data);
    }
}

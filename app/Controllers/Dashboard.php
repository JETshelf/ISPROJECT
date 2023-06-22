<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [];
        if(!session()->get('isLoggedIn'))
        redirect()->to('/');

        echo view('Views/users/header',$data);
        echo view('Views/users/dashboard',$data);
        echo view('Views/users/footer',$data);

    }
}
<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle'=>'Home',
        ];
        return view('user/Home', $data);
    }
}

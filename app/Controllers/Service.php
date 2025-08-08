<?php

namespace App\Controllers;

class Service extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Home',
        ];
        return view('user/Service', $data);
    }
}

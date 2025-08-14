<?php

namespace App\Controllers;

class Service extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Service',
        ];
        return view('user/Service', $data);
    }
}

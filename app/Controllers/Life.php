<?php

namespace App\Controllers;

class Life extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Life at Mindtrilogy',
        ];
        return view('user/Life', $data);
    }
}

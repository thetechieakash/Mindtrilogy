<?php

namespace App\Controllers;

class Careers extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Careers',
        ];
        return view('user/Careers', $data);
    }
}

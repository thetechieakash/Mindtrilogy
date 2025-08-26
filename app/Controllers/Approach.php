<?php

namespace App\Controllers;

class Approach extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle'=> 'Our Approach',
        ];
        return view('user/Approach', $data);
    }
}

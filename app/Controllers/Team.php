<?php

namespace App\Controllers;

class Team extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle'=>'Our team',
        ];
        return view('user/Team', $data);
    }
}

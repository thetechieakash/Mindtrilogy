<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle'=>'Who we are',
        ];
        return view('user/About_us', $data);
    }
}

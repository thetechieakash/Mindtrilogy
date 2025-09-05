<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle'=>'Contact Us',
        ];
        return view('user/Contact', $data);
    }
}

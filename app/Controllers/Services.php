<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Services',
        ];
        return view('user/Services', $data);
    }
}

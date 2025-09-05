<?php

namespace App\Controllers\Softapp;

use App\Controllers\BaseController;

class Webdev extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Web Development',
        ];
        return view('user/services/softapp/Web_dev', $data);
    }
}

<?php

namespace App\Controllers;

class Details extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Details',
        ];
        return view('user/Details', $data);
    }
}

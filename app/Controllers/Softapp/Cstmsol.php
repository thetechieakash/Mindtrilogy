<?php

namespace App\Controllers\Softapp;

use App\Controllers\BaseController;

class Cstmsol extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Custom Solutions',
        ];
        return view('user/services/softapp/Cstm_sol', $data);
    }
}

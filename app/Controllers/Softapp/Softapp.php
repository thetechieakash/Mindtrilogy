<?php

namespace App\Controllers\Softapp;

use App\Controllers\BaseController;

class Softapp extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Softwere & Apps',
        ];
        return view('user/services/softapp/Soft_apps', $data);
    }
}

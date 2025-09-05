<?php

namespace App\Controllers\Cloud;

use App\Controllers\BaseController;

class Cicd extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'CI / CD Pipeline',
        ];
        return view('user/services/cloud/Cicd', $data);
    }
}

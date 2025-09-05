<?php

namespace App\Controllers\Cloud;

use App\Controllers\BaseController;

class Cloud extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Cloud & Devops',
        ];
        return view('user/services/cloud/Cloud', $data);
    }
}

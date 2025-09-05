<?php

namespace App\Controllers\Cloud;

use App\Controllers\BaseController;

class Clmig extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Cloud Migration',
        ];
        return view('user/services/cloud//Clmig', $data);
    }
}

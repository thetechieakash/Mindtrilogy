<?php

namespace App\Controllers\Cloud;

use App\Controllers\BaseController;

class Infacode extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Web Development',
        ];
        return view('user/services/cloud/Infacode', $data);
    }
}

<?php

namespace App\Controllers\InfoTech;

use App\Controllers\BaseController;

class Digitrf extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'IT Consulting',
        ];
        return view('user/services/infotech/Digitrf', $data);
    }
}

<?php

namespace App\Controllers\InfoTech;
use App\Controllers\BaseController;

class InfoTech extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'IT Consulting',
        ];
        return view('user/services/infotech/It_consulting', $data);
    }
}

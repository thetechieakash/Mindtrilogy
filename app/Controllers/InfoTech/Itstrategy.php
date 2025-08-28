<?php

namespace App\Controllers\InfoTech;
use App\Controllers\BaseController;

class Itstrategy extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'IT Strategy',
        ];
        return view('user/services/infotech/It_strategy', $data);
    }
}

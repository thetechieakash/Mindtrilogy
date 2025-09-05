<?php

namespace App\Controllers\Softapp;

use App\Controllers\BaseController;

class Mobapp extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Mobile Apps',
        ];
        return view('user/services/softapp/Mob_apps', $data);
    }
}

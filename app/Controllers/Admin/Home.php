<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function getIndex()
    {
        return view('welcome_message');
    }

    public function getContact()
    {
        echo __FUNCTION__;
    }

    public function getAbout()
    {
        echo 'This is ' . __METHOD__;
    }
}

<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Guest extends BaseController
{
    public function getIndex()
    {
        echo 'This is ' . __METHOD__;
    }

    public function getAbout()
    {
        echo 'This is ' . __METHOD__;
    }
}

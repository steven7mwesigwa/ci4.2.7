<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function getIndex()
    {
//        return view('welcome_message');
        echo "Haham little bird : " . __METHOD__;
    }
}

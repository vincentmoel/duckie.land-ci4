<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DuckieCafeController extends BaseController
{
    public function index()
    {
        return view('duckie-cafe_view');
        
    }
}

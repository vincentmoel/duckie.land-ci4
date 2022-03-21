<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DuckieStarterController extends BaseController
{
    public function index()
    {
        return view('duckie-starter_view');
        
    }
}

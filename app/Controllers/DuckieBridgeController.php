<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DuckieBridgeController extends BaseController
{
    public function index()
    {
        return view('duckie-bridge_view');
        
    }
}

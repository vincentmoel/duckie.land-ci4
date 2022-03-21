<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DuckieMorphController extends BaseController
{
    public function index()
    {
        return view('duckie-morph_view');
        
    }
}

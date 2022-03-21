<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DuckieStoreController extends BaseController
{
    public function index()
    {
        return view('duckie-store_view');
        
    }
}

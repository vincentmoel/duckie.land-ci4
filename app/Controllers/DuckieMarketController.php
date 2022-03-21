<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DuckieMarketController extends BaseController
{
    public function index()
    {
        return view('duckie-market_view');
        
    }
}

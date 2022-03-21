<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RankingController extends BaseController
{
    public function index()
    {
        return view('ranking_view');
        
    }
}

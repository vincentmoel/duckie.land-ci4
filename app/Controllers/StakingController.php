<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StakingController extends BaseController
{
    public function index()
    {
        return view('staking_view');
    }
}

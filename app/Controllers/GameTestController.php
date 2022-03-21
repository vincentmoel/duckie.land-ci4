<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GameTestController extends BaseController
{
    public function index()
    {
        return view('game-test_view');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VotingController extends BaseController
{
    public function index()
    {
        return view('voting_view');
        
    }
}

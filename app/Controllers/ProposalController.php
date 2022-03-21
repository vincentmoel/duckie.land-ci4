<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProposalController extends BaseController
{
    public function index()
    {
        return view('proposal_view');
        
    }
}

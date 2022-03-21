<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class IIOController extends BaseController
{
    public function index()
    {
        return view('iio_view');
    }
}

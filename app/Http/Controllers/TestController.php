<?php

namespace App\Http\Controllers;

use App\Http\Helpers\TestHelper;
use App\Http\Interfaces\HelperInterface;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(TestHelper $helper)
    {
        parent::__construct($helper);
    }

    public function myMethod()
    {
        //
    }
}

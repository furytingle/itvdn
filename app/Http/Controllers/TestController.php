<?php

namespace App\Http\Controllers;

use App\Components\SuperComponent;
use App\Contracts\SuperContract;
use App\Facades\Super;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testProvider()
    {
        return view('provider');
    }

    public function testContract(SuperContract $component)
    {
        return $component->getName();
    }
}

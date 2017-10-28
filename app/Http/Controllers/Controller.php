<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\HelperInterface;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $helper;

    public function __construct(HelperInterface $helper)
    {
        $this->helper = $helper;
    }
}

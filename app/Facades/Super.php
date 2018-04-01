<?php


namespace App\Facades;


use App\Components\SuperComponent;
use Illuminate\Support\Facades\Facade;

class Super extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SuperComponent::class;
    }
}
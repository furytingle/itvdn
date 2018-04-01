<?php


namespace App\Components;

use App\Contracts\SuperContract;

class SuperComponent implements SuperContract
{
    protected $name = 'super ';
    protected $property = 'super-property';

    public function __construct($attribute)
    {
        $this->name .= $attribute;
    }

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @param string $property
     */
    public function setProperty(string $property)
    {
        $this->property = $property;
    }


    public function getName()
    {
        return $this->name;
    }
}
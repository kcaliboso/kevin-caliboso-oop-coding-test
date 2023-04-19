<?php

namespace App\Models;

abstract class Calculator
{
    protected $numbers;

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function add()
    {
        return $this->numbers;
    }

}

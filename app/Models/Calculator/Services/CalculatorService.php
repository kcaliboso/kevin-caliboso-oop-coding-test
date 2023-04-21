<?php

namespace App\Models\Calculator\Services;

use App\Models\Calculator;
use App\Models\Calculator\Contracts\CalculatorInterface;

class CalculatorService implements CalculatorInterface
{
    public function add($numbers)
    {
        $calc = new Calculator($numbers);
        return $calc->add();
    }

    public function subtract($numbers)
    {
        $calc = new Calculator($numbers);
        return $calc->subtract();
    }

    public function multiply($numbers)
    {
        $calc = new Calculator($numbers);
        return $calc->multiply();
    }

    public function divide($numbers)
    {
        $calc = new Calculator($numbers);
        return $calc->divide();
    }
}

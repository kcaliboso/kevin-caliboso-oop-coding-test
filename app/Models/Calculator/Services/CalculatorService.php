<?php

namespace App\Models\Calculator\Services;

use App\Models\Calculator;
use App\Models\Calculator\Contracts\CalculatorInterface;

class CalculatorService implements CalculatorInterface
{
    public function add(...$numbers)
    {
        $calc = new Calculator($numbers);
        return $calc->add();
    }

    public function subtract(...$numbers)
    {
        return $numbers;
    }

    public function multiply(...$numbers)
    {
        return $numbers;
    }

    public function divide(...$numbers)
    {
        return $numbers;
    }
}

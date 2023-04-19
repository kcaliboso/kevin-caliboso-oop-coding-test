<?php

namespace App\Models\Calculator\Contracts;

interface CalculatorInterface
{
    public function add(...$numbers);

    public function subtract(...$numbers);

    public function multiply(...$numbers);

    public function divide(...$numbers);
}

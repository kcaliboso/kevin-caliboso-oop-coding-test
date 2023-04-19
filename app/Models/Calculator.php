<?php

namespace App\Models;

class Calculator
{
    protected $numbers;

    public function __construct($numbers)
    {
        $this->numbers = $this->convert($numbers);
    }

    private function convert($numbers)
    {
        $stringArray = explode(',', $numbers);
        return array_map('floatval', $stringArray);
    }

    public function add()
    {
        return array_sum($this->numbers);
    }

    public function subtract()
    {
        $result = $this->numbers[0];
        for ($i = 1; $i < count($this->numbers); $i++) {
            $result -= $this->numbers[$i];
        }
        return $result;
    }

}

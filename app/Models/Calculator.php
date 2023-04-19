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
        return array_map('intval', $stringArray);
    }

    public function add()
    {
        return array_sum($this->numbers);
    }

}

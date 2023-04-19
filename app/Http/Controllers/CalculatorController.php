<?php

namespace App\Http\Controllers;

use App\Models\Calculator\Services\CalculatorService;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    protected $calculatorService;

    public function __construct(CalculatorService $calculatorService)
    {
        $this->calculatorService = $calculatorService;
    }

    public function add(Request $request)
    {
        try {
            return response([
                "message" => "Addition of Numbers",
                "operands" => $request->get('operands'),
                "result" => $this->calculatorService->add($request->get('operands')),
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Calculator\Services\CalculatorService;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    protected $calculatorService;

    #TODOs
    /**
     * 1) create all operations
     * 2) create input validation
     */

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

    public function subtract(Request $request)
    {
        try {
            return response([
                "message" => "Subtraction of Numbers",
                "operands" => $request->get('operands'),
                "result" => $this->calculatorService->subtract($request->get('operands')),
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

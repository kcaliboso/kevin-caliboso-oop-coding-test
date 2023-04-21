<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use App\Models\Calculator\Services\CalculatorService;

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

    public function add(CalculatorRequest $request)
    {
        try {
            $operands = $request->get('operands');
            return response([
                "message" => "Addition of Numbers",
                "operands" => $operands,
                "result" => $this->calculatorService->add($operands),
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function subtract(CalculatorRequest $request)
    {
        try {
            return response([
                "message" => "Subtraction of Numbers",
                "operands" => $request->get('operands'),
                "result" => $this->calculatorService->subtract($request->get('operands')),
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function multiply(CalculatorRequest $request)
    {
        try {
            return response([
                "message" => "Multiplication of Numbers",
                "operands" => $request->get('operands'),
                "result" => $this->calculatorService->multiply($request->get('operands')),
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function divide(CalculatorRequest $request)
    {
        try {
            return response([
                "message" => "Division of Numbers",
                "operands" => $request->get('operands'),
                "result" => $this->calculatorService->divide($request->get('operands')),
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

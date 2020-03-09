<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleCalculate extends Controller
{
    public function index()
    {
        return view("calculate.index");
    }

    public function calculate()
    {
        $firstOperand = $_POST['first'];
        $seconOperand = $_POST['second'];
        $operation = $_POST['operation'];
        switch ($operation) {
            case '+':
                $result = $firstOperand + $seconOperand;
                break;
            case '-':
                $result = $firstOperand - $seconOperand;
                break;
            case '*':
                $result = $firstOperand * $seconOperand;
                break;
            case '/':
                $result = $firstOperand / $seconOperand;
                break;
        }

        return view('calculate.index', compact('result'));
    }
}

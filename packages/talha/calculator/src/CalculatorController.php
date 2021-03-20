<?php

namespace Talha\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($value1, $value2)
    {
        $result = $value1 + $value2;
        return view('calculator::result', ['result' => $result]);
    }

    public function subtract($value1, $value2)
    {
        $result = $value1 - $value2;    
        return view('calculator::result', ['result' => $result]);
    }
}

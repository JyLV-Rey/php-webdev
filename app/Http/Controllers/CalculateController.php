<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Utils;
use Illuminate\Support\Facades\Log;

class CalculateController extends Controller
{
    public function index($num1, $num2)
    {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            Log::warning("Invalid input for calculation: num1=$num1, num2=$num2");
            return view('err', ['message' => 'Invalid input: Both parameters must be numeric.']);
        }

        Log::debug("Calculating results for $num1 and $num2");

        $results = [
            'addition' => Utils::add($num1, $num2),
            'subtraction' => Utils::subtract($num1, $num2),
            'multiplication' => Utils::product($num1, $num2),
            'division' => Utils::quotient($num1, $num2)
        ];

        Log::debug("SUCCESS!! Calculation results: " . json_encode($results));
        return view('calculate', ['results' => $results]);
    }
}

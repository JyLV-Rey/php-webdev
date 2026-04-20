<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller
{
    public function index() {
        return "
        <h1>404 Not Found</h1>
            <img src='https://octodex.github.com/images/Professortocat_v2.png' style='width: 30%' alt='404 Not Found'></img>
        <h2>The page you are looking for does not exist.</h2>";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */

    /**
     * FUNCIÓN DEL CONTROLADOR QUE DEVUELVE LA VISTA INDEX
     */
    public function __invoke(Request $request)
    {
        return view('index');
    }
}

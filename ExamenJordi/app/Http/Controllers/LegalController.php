<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LegalController extends Controller
{
    /**
     * FUNCIÓN DEL CONTROLADOR QUE DEVUELVE LA VISTA COOKIES
     */
    public function cookies():View{
        return view('legal.cookies');
    }

    /**
     * FUNCIÓN DEL CONTROLADOR QUE DEVUELVE LA VISTA PRIVACY
     */
    public function privacy():View{
        return view('legal.privacy');
    }
}

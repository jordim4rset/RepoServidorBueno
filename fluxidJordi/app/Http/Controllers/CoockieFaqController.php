<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CoockieFaqController extends Controller
{
    public function faq():View
    {
        return view('coockieFaq.faq');
    }

    public function coockie():View
    {
        return view('coockieFaq.coockie');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UnderConstructionController extends Controller
{
    public function index(): View
    {
        return view('under-construction');
    }
}

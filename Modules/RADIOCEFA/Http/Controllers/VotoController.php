<?php

namespace Modules\RADIOCEFA\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VotoController extends Controller
{

    public function index()
    {
        return view('radiocefa::index');
    }

}

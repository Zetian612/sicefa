<?php

namespace Modules\CEFAMAPS\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SICA\Entities\ProductiveUnit;
use Modules\SICA\Entities\Farm;
use Modules\SICA\Entities\Environment;
use Modules\CEFAMAPS\Entities\Page;

class CEFAMAPSController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $unit = ProductiveUnit::get();
        $farm = Farm::get();
        $environ = Environment::with('coordinates')->with('pages')->get();
        $data = ['title'=>trans('cefamaps::menu.Home'), 'unit'=>$unit, 'farm'=>$farm, 'environ'=>$environ];
        
    }

}

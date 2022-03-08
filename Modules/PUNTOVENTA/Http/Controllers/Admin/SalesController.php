<?php

namespace Modules\PUNTOVENTA\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('puntoventa::layouts.admin.sales.home');
    }

    /**
     *  Registra los datos de la venta
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //Registramos los datos de el formulario, para luego generar la factura. 

        return view('puntoventa::layouts.admin.sales.invoice');
    }

}

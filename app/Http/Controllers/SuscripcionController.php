<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use Yajra\DataTables\DataTablesServiceProvider;


class SuscripcionController extends Controller
{
    public function index()
    {
        
        
            return datatables()->of(Servicio::latest()->get());
        
        return view('suscripcion.index');
        
    }
}

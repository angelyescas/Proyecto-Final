<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use Yajra\DataTables\DataTablesServiceProvider;
use Yajra\DataTables\Facades\DataTables;
use Dotenv\Validator;



class SuscripcionController extends Controller
{
     function index()
    {
        return view('suscripcion.index');
    }
    function getdata()
    {
     $servicios = Servicio::select('Nombre', 'Costo','Foto1');
     return Datatables::of($servicios)->make(true);
    }
}

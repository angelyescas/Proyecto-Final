<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificacionController extends Controller
{
    public function index()
    {
        
        
        //$mensaje = DB::table('mensajes')->get();
        $count = Mensaje::where('recibe_id','=', auth()->id())->count();
        
        $mensaje =Mensaje::where('recibe_id','=', auth()->id())->get();
        return view('notifi.index', compact('mensaje','count'));
        

    }
}

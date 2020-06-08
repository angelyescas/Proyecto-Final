<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        
       $datas = Servicio::latest()->paginate(5);
        return view('welcome', compact('datas'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }
}

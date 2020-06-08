<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Mensaje;
use Illuminate\Support\Facades\DB;

class MensajeController extends Controller
{
    public function index()
    {
    $users =User::where('id','!=', auth()->id())->get();
    return view('mensaje.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'recibe_id'    =>  'required',
            'body'     =>  'required'
            
        ]);

        $form_data = array(
            'send_id'=>auth()->id(),
            'recibe_id'       =>   $request->recibe_id,
            'body'        =>   $request->body,
        );

        Mensaje::create($form_data);
        
        return redirect('users')->with('flash','Tu mensaje fue enviado');
    }
}

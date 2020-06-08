<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $data = Servicio::latest()->paginate(5);
        return view('servicio.index', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre'    =>  'required',
            'Costo'     =>  'required',
            'MontoMora'     =>  'required',
            'Foto1'         =>  'required|image|max:2048',
            'Foto2'         =>  'required|image|max:2048',
            'Foto3'         =>  'required|image|max:2048'
        ]);

        $Foto1 = $request->file('Foto1');
        $Foto2 = $request->file('Foto2');
        $Foto3 = $request->file('Foto3');
       
        $new_foto1 = rand() . '.' . $Foto1->getClientOriginalExtension();
        $Foto1->move(public_path('Images'), $new_foto1);
        $new_foto2 = rand() . '.' . $Foto2->getClientOriginalExtension();
        $Foto2->move(public_path('Images2'), $new_foto2);
        $new_foto3 = rand() . '.' . $Foto3->getClientOriginalExtension();
        $Foto3->move(public_path('Images3'), $new_foto3);

        $form_data = array(
            'Nombre'       =>   $request->Nombre,
            'Costo'        =>   $request->Costo,
            'MontoMora'        =>   $request->MontoMora,
            'Foto1'            =>   $new_foto1,
            'Foto2'            =>   $new_foto2,
            'Foto3'            =>   $new_foto3
        );

        Servicio::create($form_data);

        return redirect('servicio')->with('success', 'Se creo correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Servicio::findOrFail($id);
        return view('servicio.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Servicio::findOrFail($id);
        return view('servicio.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new_foto1 = $request->hidden_image;
        $Foto1 = $request->file('Foto1');
        $new_foto2 = $request->hidden_image2;
        $Foto2 = $request->file('Foto2');
        $new_foto3 = $request->hidden_image3;
        $Foto3 = $request->file('Foto3');
        if($Foto1 != '' )
        {
            $request->validate([
            'Nombre'    =>  'required',
            'Costo'     =>  'required',
            'MontoMora'     =>  'required',
            'Foto1'         =>  'required|image|max:2048',
            
            ]);


            $new_foto1 = rand() . '.' . $Foto1->getClientOriginalExtension();
            $Foto1->move(public_path('Images'), $new_foto1);
        
        }
        elseif($Foto2 != ''){
            $request->validate([
                'Nombre'    =>  'required',
                'Costo'     =>  'required',
                'MontoMora'     =>  'required',
                'Foto2'         =>  'required|image|max:2048',
                
                ]);
    
    
                $new_foto2 = rand() . '.' . $Foto2->getClientOriginalExtension();
                $Foto2->move(public_path('Images2'), $new_foto2);
        }
        elseif($Foto3 != ''){
            $request->validate([
                'Nombre'    =>  'required',
                'Costo'     =>  'required',
                'MontoMora'     =>  'required',
                'Foto3'         =>  'required|image|max:2048',
                
                ]);
    
    
                $new_foto3 = rand() . '.' . $Foto3->getClientOriginalExtension();
                $Foto3->move(public_path('Images3'), $new_foto3);
        }
        else
        {
            $request->validate([
                'Nombre'    =>  'required',
                'Costo'     =>  'required',
                'MontoMora'     =>  'required'
            ]);
        }

        $form_data = array(
            'Nombre'       =>   $request->Nombre,
            'Costo'        =>   $request->Costo,
            'MontoMora'        =>   $request->MontoMora,
            'Foto1'            =>   $new_foto1,
            'Foto2'            =>   $new_foto2,
            'Foto3'            =>   $new_foto3
        );
  
        Servicio::whereId($id)->update($form_data);

        return redirect('servicio')->with('success', 'Se cambio correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Servicio::findOrFail($id);
        $data->delete();

        return redirect('servicio')->with('success', 'Se elimnio correctamente');
    }
}

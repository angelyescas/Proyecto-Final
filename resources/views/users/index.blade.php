@extends('rol.cobrador')

@section('content')
<div class="container">
@if (session()->has('flash'))
<div class="container">
<div class="alert alert-success">{{session('flash')}} </div>
</div>
@endif
                   

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th colspan="3"><a href="{{ route('mensaje.index')}}" class="btn btn-success btn-sm">Enviar Mensaje</a></th>
                                </tr> 
                        <tbody>    
                            @foreach ($users as $user)
                                <tr >

                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td width="10px">
                                
                                <a href="{{ route('users.show', $user->id)}}"
                                class="btn btn-dark btn-sm">
                                Ver
                                </a>
                               

                                </td>

                                <td width="10px">
                               
                                <a href="{{ route('users.edit', $user->id)}}"
                                class="btn btn-primary btn-sm">
                                Editar
                                </a>
                                
                                </td>

                                <td width="10px">
                                @can('users.destroy')
                                {!! Form::open(['route' => ['users.destroy', $user->id],
                                'method'=> 'DELETE']) !!}
                                <button class="btn btn-danger btn-sm">
                                Eliminar
                                </button>
                                
                                {!! Form::close() !!}
                                @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  
                </div>
            
</div>
@endsection
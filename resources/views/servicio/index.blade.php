@extends('rol.cobrador')

@section('content')
<div class="container">
<div class="card-body">

@if ($message =Session::get('sucess'))
<div class="alert alert-success"
<p>{{$message}}</p>
</div>
@endif
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Foto</th>
  <th width="10%">Foto</th>
  <th width="10%">Foto</th>
  <th width="15%">Nombre</th>
  <th width="15%">Costo</th>
  <th width="10%">MontoMora</th>
  <th colspan="3">Acciones<a href="{{ route('servicio.create')}}" class="btn btn-success btn-sm">Agregar</a></th>


 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/Images/{{ $row->Foto1 }}" class="img-thumbnail" width="75" /></td>
   <td><img src="{{ URL::to('/') }}/Images2/{{ $row->Foto2 }}" class="img-thumbnail" width="75" /></td>
   <td><img src="{{ URL::to('/') }}/Images3/{{ $row->Foto3 }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->Nombre }}</td>
   <td>{{ $row->Costo }}</td>
   <td>{{ $row->MontoMora }}</td>
      
     <td><a href="{{ route('servicio.show', $row->id)}}" class="btn btn-info btn-sm">Ver</a></td>
     <td><a href="{{ route('servicio.edit', $row->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
     <td><form action="{{route ('servicio.destroy', $row->id)}}" method="post">
     @csrf
     @method('DELETE')
     <button typw="submit" class="btn btn-danger btn-sm">Eliminar</button>
     </form>
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}

                    
                </div>
        
</div>
@endsection
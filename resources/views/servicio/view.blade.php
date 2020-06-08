@extends('rol.cobrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cobrador</div>

                <div class="card-body">
                    <div class="jumbotron text-center">
 
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->Foto1 }}" class="img-thumbnail" />
 <img src="{{ URL::to('/') }}/images2/{{ $data->Foto2 }}" class="img-thumbnail" />
 <img src="{{ URL::to('/') }}/images3/{{ $data->Foto3 }}" class="img-thumbnail" />
 <h3>Nombre = {{ $data->Nombre }} </h3>
 <h3>Costo = {{ $data->Costo }}</h3>
 <h3>Monto de Mora = {{ $data->MontoMora }}</h3>
 <div align="right">
  <a href="{{ route('servicio.index') }}" class="btn btn-primary">Regresar</a>
 </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
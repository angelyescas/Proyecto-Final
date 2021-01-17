@extends('rol.cobrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cobrador</div>

                <div class="card-body">
                     @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
                <a href="{{ route('servicio.index') }}" class="btn btn-primary">Regresar</a>
            </div>
            <br />
     <form method="post" action="{{ route('servicio.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group">
       <label class="col-md-4 text-right">Ingresa el nombre del servicio</label>
       <div class="col-md-8">
        <input type="text" name="Nombre" value="{{ $data->Nombre }}" class="form-control input-lg" />
       </div>
      </div>
      <div class="form-group">
       <label class="col-md-4 text-right">Ingresa el costo</label>
       <div class="col-md-8">
        <input type="text" name="Costo" value="{{ $data->Costo }}" class="form-control input-lg" />
       </div>
      </div>
      <div class="form-group">
       <label class="col-md-4 text-right">Ingresa el monto de mora</label>
       <div class="col-md-8">
        <input type="text" name="MontoMora" value="{{ $data->MontoMora }}" class="form-control input-lg" />
       </div>
      </div>
      <div class="form-group">
       <label class="col-md-4 text-right">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="Foto1" />
              <img src="{{ URL::to('/') }}/images/{{ $data->Foto1 }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->Foto1 }}" />
       </div>
      </div>
      <div class="form-group">
       <label class="col-md-4 text-right">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="Foto2" />
              <img src="{{ URL::to('/') }}/images2/{{ $data->Foto2 }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image2" value="{{ $data->Foto2 }}" />
       </div>
      </div>
      <div class="form-group">
       <label class="col-md-4 text-right">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="Foto3" />
        <img src="{{ URL::to('/') }}/images3/{{ $data->Foto3 }}" class="img-thumbnail" width="100" />
        <input type="hidden" name="hidden_image3" value="{{ $data->Foto3 }}" />
       </div>
      </div>
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Editar" />
      </div>
     </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

            
           
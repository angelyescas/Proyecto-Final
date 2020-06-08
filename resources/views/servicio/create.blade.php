@extends('rol.cobrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cobrador</div>

                <div class="card-body">
                   @if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif


<form method="post" action="{{ route('servicio.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-right">Nombre del servicio</label>
  <div class="col-md-8">
   <input type="text" name="Nombre" class="form-control input-lg" />
  </div>
 </div>
 <div class="form-group">
  <label class="col-md-4 text-right">Costo del servicio</label>
  <div class="col-md-8">
   <input type="text" name="Costo" class="form-control input-lg" />
  </div>
 </div>
 <div class="form-group">
  <label class="col-md-4 text-right">Monto de mora</label>
  <div class="col-md-8">
   <input type="text" name="MontoMora" class="form-control input-lg" />
  </div>
 </div>
 <div class="form-group">
  <label class="col-md-4 text-right">Seleccionar la imagen 1</label>
   <input type="file" name="Foto1" />
 </div>
  <div class="form-group">
  <label class="col-md-4 text-right">Seleccionar la imagen 2</label>
   <input type="file" name="Foto2" />
 </div>
  <div class="form-group">
  <label class="col-md-4 text-right">Seleccionar la imagen 3</label>
   <input type="file" name="Foto3" />
 </div>
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Agregar" />
 </div>
<div align="right">
 <a href="{{ route('servicio.index') }}" class="btn btn-success">Back</a>
</div>
</form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
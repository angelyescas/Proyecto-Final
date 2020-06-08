@extends('rol.cobrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cobrador</div>

                <div class="card-body">
                
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



<form method="post" action="{{ route('mensaje.store') }}" enctype="multipart/form-data">

 @csrf
  
<div class="form-group">
    <select name="recibe_id" class="form-control">
    <option value="">Seleccione el usuario</option>
        @foreach($users as $user)
             <option value="{{ $user->id }}">{{ $user->name }} </option>                       
        @endforeach     
    </select> 
</div>

    <div class="form-group">
        <textarea name="body" class="form-control" placeholder="Escribe el mensaje"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" >Enviar</button>
    </div>
</form>



                </div>
            </div>
        </div>
    </div>
</div>



@endsection
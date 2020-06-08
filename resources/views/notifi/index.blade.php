@extends('rol.suscriptor')

@section('content')
<div class="container">
@if (session()->has('flash'))
<div class="container">
<div class="alert alert-success">{{session('flash')}} </div>
</div>
@endif
                          
                            @foreach ($mensaje as $men)
                            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                <div class="card-header">Mensaje</div>
                                <div class="card-body">
                                 <p class="card-text">{{$men->body}}
                                 </p>
                                 <p class="card-text">{{$men->count}}
                                 </p>
                                 </div>
                                </div>
                            @endforeach
                            
                           


                       
                  
                
            
</div>
@endsection
@extends('rol.suscriptor')
@section('content')
<div class="container">    
  
    <table class="table table-bordered table-striped" id="user_table">
           <thead>
            <tr>
                <th width="10%">Image</th>
                <th width="35%">Nombre</th>
                <th width="35%">Costo</th>
                <th width="30%">MontoMora</th>
            </tr>
           </thead>
       </table>
   </div>
  





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
<script>
$(document).ready(function(){

 $('#user_table').DataTable({
  "serverSide": true,
  "ajax":"{{ url('suscripcion.index') }}", 
  "columns":[
   {data: 'Nombre'},
   {data: 'Costo'},
   {data: 'MontoMora'},
  ]
 });
});
</script>
@endsection
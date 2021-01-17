@extends('rol.suscriptor')
@section('content')

<div class="container">
  
    <table id="student_table" class="table table-bordered" style="width:100%">
        <thead>
            <tr class="bg-primary">
                <th>Nombre</th>
                <th>Costo</th>
                <th>Foto</th>

            </tr>
        </thead>
    </table>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    
    
<script type="text/javascript">
$(document).ready(function() {
     $('#student_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('suscripcion.getdata') }}",
        "columns":[
            { "data": "Nombre" },
            { "data": "Costo" },
            { "data": "Foto1",
    render: function(data, type, full, meta){
     return "<img src={{ URL::to('/') }}/images/" + data + " width='100' class='img-thumbnail' />";
    },
    orderable: false
   }
        ]
     });  

});
</script>

@endsection
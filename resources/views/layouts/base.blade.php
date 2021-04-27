<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

</head>
<body>
    @include('layouts.navbar')
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            @yield('content')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://unpkg.com/sweetalert2"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function(){

        @if(session('status'))
        swal('Correcto!', '{{ session('status') }}', 'success');
        @endif

        $('form').on('click', '.btn-upload', function(event){
            event.preventDefault();
            $(this).prev().click();
        });
        $('table').on('click', 'img', function(event){
            event.preventDefault();
            $ui = $(this).attr('src');
            swal({
                imageUrl: $ui
            });
        });
        $('table').on('click', '.btn-delete', function(event){
            event.preventDefault();
            swal({
                title: 'Esta seguro ?',
                text: 'Realmente desea eliminar este registro ?',
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33'
            }).then((result) => {
                if(result.value){
                    $(this).parent().submit();
                }
            });
        });
        $('form').on('keyup', '#usearch', function(event){
            event.preventDefault();
            $name = $(this).val();
            $.get('users/ajaxsearch', {name: $name}, function(data){
                $('.results').html(data);
            });
        });
        $('form').on('keyup', '#esearch', function(event){
            event.preventDefault();
            $name = $(this).val();
            $.get('escuelas/ajaxsearch', {name: $name}, function(data){
                $('.results').html(data);
            });
        });
        $('form').on('keyup', '#tsearch', function(event){
            event.preventDefault();
            $name = $(this).val();
            $.get('trainingprogram/ajaxsearch', {name: $name}, function(data){
                $('.results').html(data);
            });
        });
        //------------------------------------------------------------------------
        $('.dataTable').DataTable({
            "ordering": false,
            "sDom": '<"row view-filter"<"col-md-12"l><"col-md-6"f>>t<"row view-pager"<"col-sm-12"ip>>',
            "info": false,
            "language": {
                "paginate": {
                    "previous": "<i class='fas fa-chevron-left'></i>",
                    "next": "<i class='fas fa-chevron-right'></i>"
                },
                "search": "",
                "sSearchPlaceholder": "Buscar:",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "sInfo": "Mostrando <strong>_START_ a _END_</strong> de _TOTAL_ registros",
                "emptyTable": "No hay datos disponibles en la tabla",
                "sEmptyTable": "No hay datos disponibles en la tabla",
                "infoFiltered": " - filtrando de _MAX_ registros",
                "sInfoFiltered": "(filtrado de _MAX_ registros en total)",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No hay registros para mostrar",
                "sInfoEmpty": "Mostrando <strong>0 a 0</strong> de 0 registros"

            }
        });
    });
</script>
</body>
</html>

@extends('layouts.base')

@section('title', 'Editar Pagos')

@section('content')
    <div class="col-md-6 offset-3">
        <h1 class="text-center"><i class="fa fa-plus"></i> Editar Pagos</h1>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('escuela/'.$escuela_id.'/assistance')}}">Lista de Asistencias</a></li>
            <li class="breadcrumb-item active">Editar Pagos</li>
        </ol>
        @include('layouts.validation_errors')
        <form action="{{url('asistencias/'.$asistencia->id)}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            {{ method_field('PUT')}}

            <div class="form-group">
                <label for="month"> Mes: </label>
                <select name="month" id="month" class="form-control" required>
                    <option value="">Seleccione mes</option>
                    <option value="Enero" {{ $asistencia->month == 'Enero' ? 'selected' : '' }}>Enero</option>
                    <option value="Febrero" {{ $asistencia->month == 'Febrero' ? 'selected' : '' }}>Febrero</option>
                    <option value="Marzo" {{ $asistencia->month == 'Marzo' ? 'selected' : '' }}>Marzo</option>
                    <option value="Abril" {{ $asistencia->month == 'Abril' ? 'selected' : '' }}>Abril</option>
                    <option value="Mayo" {{ $asistencia->month == 'Mayo' ? 'selected' : '' }}>Mayo</option>
                    <option value="Junio" {{ $asistencia->month == 'Junio' ? 'selected' : '' }}>Junio</option>
                    <option value="Julio" {{ $asistencia->month == 'Julio' ? 'selected' : '' }}>Julio</option>
                    <option value="Agosto" {{ $asistencia->month == 'Agosto' ? 'selected' : '' }}>Agosto</option>
                    <option value="Septiembre" {{ $asistencia->month == 'Septiembre' ? 'selected' : '' }}>Septiembre</option>
                    <option value="Octubre" {{ $asistencia->month == 'Octubre' ? 'selected' : '' }}>Octubre</option>
                    <option value="Noviembre" {{ $asistencia->month == 'Noviembre' ? 'selected' : '' }}>Noviembre</option>
                    <option value="Diciembre" {{ $asistencia->month == 'Diciembre' ? 'selected' : '' }}>Diciembre</option>
                </select>
            </div>

            <div class="form-group">
                <label for="asistent"> Número de asistencias: </label>
                <input type="number" id="asistent" name="asistent" class="form-control" placeholder="Numero de asistencias" value="{{$asistencia->asistent}}" >
            </div>

            <div class="form-group">
                <button class="btn btn-outline-success" type="submit" value="Save">Actualizar</button>
            </div>
        </form>
    </div>
@endsection

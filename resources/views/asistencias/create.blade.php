@extends('layouts.base')

@section('title', 'Adicionar Club')

@section('content')
    <div class="col-md-6 offset-3">
        <h1 class="text-center"><i class="fa fa-plus"></i> Adicionar Asistencia</h1>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('escuela/'.$escuela_id.'/assistance')}}">Lista de Asistencias</a></li>
            <li class="breadcrumb-item active">Adicionar Asistencia</li>
        </ol>
        @include('layouts.validation_errors')
        <form action="{{url('asistencias')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <input type="hidden" name="escuela_id" value="{{ $escuela_id }}">

            <div class="form-group">
                <label for="month"> Mes: </label>
                <select name="month" id="month" class="form-control" required>
                    <option value="">Seleccione mes</option>
                    <option value="Enero">Enero</option>
                    <option value="Febrero">Febrero</option>
                    <option value="Marzo">Marzo</option>
                    <option value="Abril">Abril</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Junio">Junio</option>
                    <option value="Julio">Julio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Septiembre">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="Noviembre">Noviembre</option>
                    <option value="Diciembre">Diciembre</option>
                </select>
            </div>

            <div class="form-group">
                <label for="asistent"> Número de asistencias: </label>
                <input type="number" id="asistent" name="asistent" class="form-control" placeholder="Número de asistencias" value="{{old('asistent')}}" required>
            </div>

            <div class="form-group">
                <button class="btn btn-outline-success" type="submit" value="Save">Adicionar</button>
            </div>
        </form>
    </div>
@endsection

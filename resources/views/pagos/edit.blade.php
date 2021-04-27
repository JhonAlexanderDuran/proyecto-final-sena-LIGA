@extends('layouts.base')

@section('title', 'Editar Pagos')

@section('content')
    <div class="col-md-6 offset-3">
        <h1 class="text-center"><i class="fa fa-plus"></i> Editar Pagos</h1>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('escuela/'.$escuela_id.'/payments')}}">Lista de Pagos</a></li>
            <li class="breadcrumb-item active">Editar Pagos</li>
        </ol>
        @include('layouts.validation_errors')
        <form action="{{url('pagos/'.$pago->id)}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            {{ method_field('PUT')}}

            <div class="form-group">
                <label for="number">Número de la Factura:</label>
                <input type="number" id="number" name="number" class="form-control" placeholder="Numero de Factura" value="{{$pago->number}}" >
            </div>

            <div class="form-group">
                <label for="payment">Fecha de Pago:</label>
                <input type="date" id="payment" name="payment" class="form-control" value="{{$pago->payment}}" >
            </div>

            <div class="form-group">
                <label for="concept">Concepto:</label>
                <input type="text" id="concept" name="concept" class="form-control" placeholder="Concepto" value="{{$pago->concept}}" >
            </div>

            <div class="form-group">
                <label for="value">Por valor de:</label>
                <input type="number" id="value" name="value" class="form-control" placeholder="Por Valor De" value="{{$pago->value}}">
            </div>

            <div class="form-group">
                <button class="btn btn-outline-success" type="submit" value="Save">Actualizar</button>
            </div>
        </form>
    </div>
@endsection

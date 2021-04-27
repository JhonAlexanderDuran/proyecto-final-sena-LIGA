@extends('layouts.base')

@section('title', 'Adicionar Deportista')

@section('content')
    <div class="col-md-6 offset-3">
        <h1 class="text-center"><i class="fa fa-plus"></i> Adicionar Deportistas</h1>
        <hr>
        @if(Auth::user()->role=='Admin')
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('consultas')}}">Lista de Deportistas</a></li>
                <li class="breadcrumb-item active">Adicionar Deportista</li>
            </ol>
        @endif
        @include('layouts.validation_errors')
        <form action="{{url('deportistas')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="codigo">Número de Competencia: </label>
                <input type="number" id="codigo" name="codigo" class="form-control" placeholder="Numero Competencia" value="{{old('codigo')}}" required>
            </div>

            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Nombre Completo" value="{{old('name')}}" required>
            </div>

            <div class="form-group">
                <label for="document">Número de Documento:</label>
                <input type="number" id="document" name="document" class="form-control" placeholder="Número de Documento" value="{{old('document')}}" required>
            </div>

            <div class="form-group">
                <label for="phonenumber">Número de Teléfonico:</label>
                <input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Numero Telefonico" required>
            </div>

            <div class="form-group">
                <label for="rh">RH:</label>
                <input type="text" id="rh" name="rh" class="form-control" placeholder="RH" required>
            </div>

            <div class="form-group">
                <label for="manager">Acudiente:</label>
                <input type="text" id="manager" name="manager" class="form-control" placeholder="Acudiente" required>
            </div>


            <div class="form-group">
                <label for="eps">E.P.S</label>
                <input type="text" id="eps" name="eps" class="form-control" placeholder="EPS" required>
            </div>

            <div class="form-group">
                <label for="category">Nivel del Competidor:</label>
                <select class="form-control" id="category" name="category" required>
                    <option value=""> Seleccione Nivel</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>


            <div class="form-group">
                <label for="state">Estado:</label>
				<select class="form-control" id="state" name="state" required>
					<option value="">Seleccione Estado</option>
					<option value="Activo">Activo</option>
					<option value="Inactivo">Inactivo</option>
				</select>
			</div>

			<div class="form-group">
                <label for="club">Club al que pertenece:</label>
                <select class="form-control" id="club" name="club_id" required>
                    <option value="">Seleccione Club</option>
                    @foreach($clubs as $club)
                        <option value="{{ $club->id }}"> {{ $club->name }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="file" class="form-control d-none" accept="image/*" name="photo">
                <button class="btn btn-outline-success btn-block btn-upload" type="button"><i class=" fa fa-upload"></i> Seleccione Foto</button>
            </div>

            <div class="form-group">
                <button class="btn btn-outline-success" type="submit" value="Save">Adicionar</button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.base')

@section('title', 'Adicionar Usuarios')

@section('content')
    <div class="col-md-6 offset-3">
        <h1 class="text-center"><i class="fa fa-plus"></i> Adicionar Usuarios</h1>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('user')}}">Lista de Usuario</a></li>
            <li class="breadcrumb-item active">Adicionar Usuario</li>
        </ol>
        @include('layouts.validation_errors')
        <form action="{{url('user')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Nombre Completo" value="{{old('name')}}" required>
            </div>

            <div class="form-group">
                <label for="document">Número de Documento:</label>
                <input type="number" id="document" name="document" class="form-control" placeholder="Número de Documento" value="{{old('document')}}" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Correo Electrónico" value="{{old('email')}}" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>

            <div class="form-group">
                <label for="password-confirm">Confirmar Contraseña:</label>
                <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña" required>
            </div>

            <div class="form-group">
                <label for="role">Rol:</label>
                <select class="form-control" name="role" required id="role">
                    <option value=""> Seleccione Rol </option>
                    <option value="Admin"> Administrador </option>
                    <option value="Club"> Club </option>
                </select>
            </div>
            <div class="form-group">
                <label for="phonenumber">Número Teléfonico:</label>
                <input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Numero Telefonico" required>
            </div>

            <div class="form-group">
                <button class="btn btn-outline-success" type="submit" value="Save">Adicionar</button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.base')

@section('title', 'Adicionar Club')

@section('content')
    <div class="col-md-6 offset-3">
        <h1 class="text-center"><i class="fa fa-plus"></i> Adicionar Club</h1>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('clubs')}}">Lista de Clubs</a></li>
            <li class="breadcrumb-item active">Adicionar Club</li>
        </ol>
        @include('layouts.validation_errors')
        <form action="{{url('clubs')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Nombre del Club: </label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Nombre Club" value="{{old('name')}}" required>
            </div>

            <div class="form-group">
                <label for="nit">Número de N.I.T. </label>
                <input type="text" id="nit" name="nit" class="form-control" placeholder="Número de N.I.T." value="{{old('nit')}}" required>
            </div>

            <div class="form-group">
                <label for="city">Ciudad: </label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Ciudad" value="{{old('city')}}" required>
            </div>

            <div class="form-group">
                <label for="phonenumber">Número Teléfonico: </label>
                <input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Numero Telefonico" required>
            </div>

            <div class="form-group">
                <label for="user_id">Encargado: </label>
                <select class="form-control" id="user_id" name="user_id" required>
                    <option value="">Seleccione Usuario</option>
                    @foreach($user as $user)
                        <option value="{{ $user->id }}"> {{ $user->name }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-outline-success" type="submit" value="Save">Adicionar</button>
            </div>
        </form>
    </div>
@endsection

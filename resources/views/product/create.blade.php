@extends('layout.app')

@section('title', 'Crear producto')

@section('content')
    <div class="container">
{{-- con un condicional if valido los errors --}}
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif    
        <div class="text-center">
        <h1>Crear producto</h1>
        </div>
        <form action="{{ route('priduct.store') }}" class="align-items-center" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Caracteristicas</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Caracteristicas" value="{{ old('description') }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="precio" value="{{ old('price') }}">
            </div>
            <div class="text-end">
            <button type="submit" class="btn btn-primary"><i class="bi bi-server"> </i>Guardar</button>
            <a href="{{ route('product.index') }}" class="btn btn-primary"><i class="bi bi-server"> </i>Volver</a>
            </div>
        </form>
    </div>
@endSection
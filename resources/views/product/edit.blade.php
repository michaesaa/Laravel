@extends('layout.app')

@section('title', 'Crear producto')

@section('content')
    <div class="container">
        <div class="text-center">
        <h1>Editar producto</h1>
        </div>
        <form action="{{ route('priduct.update', $product->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mt-3">
                <b>ID:</b> {{ $product->id }}
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{{ $product->name }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Caracteristicas</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Caracteristicas" value="{{ $product->description }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="precio" value="{{ $product->price }}">
            </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-server"> </i>Guardar</button>
            <a href="{{ route('product.index') }}" class="btn btn-primary"><i class="bi bi-server"> </i>Volver</a>
         
        </form>
    </div>
@endSection
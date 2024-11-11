@extends('layout.app')

@section('title', 'Crear producto')

@section('content')
    <div class="container">
        <div class="text-center">
        <h1>Ver producto</h1>
        </div>
            <div class="mt-3">
                <b>ID:</b> {{ $product->id }}
            </div>
            
            <div class="mt-3">
                <b>NOMBRE:</b> {{ $product->name }}
            </div>

            <div class="mt-3">
                <b>DESCRIPCION:</b> {{ $product->description }}
            </div>

            <div class="mt-3">
                <b>FECHA DE CREADO:</b> {{ $product->created_at }}
            </div>

            <div class="mt-3">
                <b>FECHA DE UPDATE:</b> {{ $product->updated_at }}
            </div>

            <div>
                
            </div>

            <a href="{{ route('product.index') }}" class="btn btn-primary"><i class="bi bi-server"> </i>Volver</a>
         
    
    </div>
@endSection
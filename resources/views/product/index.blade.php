@extends('layout.app')

@section('title', 'Products')

@section('content')
    <div class="container mt-15">
        <div class="text-center">
        <h1>Lista de productos</h1>
        </div>

        @if (session('message'))

            <div class="alert alert-success">
                {{ session('message') }}
            </div>

        @endif


       <div class="text-end ">
        <a href="{{ route('priduct.create') }}" class="btn btn-primary text-end" ><i class="bi bi-box2-fill"> </i>Crear</a>
       </div>
       <table class="table ">
        
        <thead>
            <tr class="text-end">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Precio</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
             
        @foreach ($products as $product)
            <tr class="text-end">
                <th scope="row"> {{ $product->id }} </th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                <a href="{{ route('priduct.show', $product->id) }}" class="btn btn-info"><i class="bi bi-eye"> </i >Ver</a>    
                <a href="{{ route('priduct.edit', $product->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"> </i >Editar</a>
                <form action="{{route('priduct.destroy', $product->id)}}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')   
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro?')"><i class="bi bi-trash"> </i>Eliminar</button>
                </form>
            </td>
            </tr>
        @endforeach

            </tbody>
        </table>
    </div>
@endsection

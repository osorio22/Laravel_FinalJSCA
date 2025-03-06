@extends('layouts.layout')

@section('title', 'Eliminar Ingrediente')

@section('content')

<div class="container mt-5">
    <h2 class="text-center text-danger">🗑️ Eliminar Ingrediente</h2>

    <div class="card shadow-lg p-4" style="background-color: #F8F9FA; border-radius: 15px;">
        <p class="text-center">¿Estás seguro de que deseas eliminar el ingrediente <strong> {{ $id }} </strong>?</p>

        <form action="{{ route('ingredientes.destroy', $id) }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="text-center">
                <button type="submit" class="btn btn-danger fw-bold">🗑️ Confirmar Eliminación</button>
                <a href="{{ route('ingredientes.index') }}" class="btn btn-secondary fw-bold">🔙 Cancelar</a>
            </div>
        </form>
    </div>
</div>

@endsection

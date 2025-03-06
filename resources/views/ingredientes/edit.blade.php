@extends('layouts.layout')

@section('title', 'Editar Ingrediente')

@section('content')

<div class="container mt-5">
    <h2 class="text-center text-primary">✏️ Editar Ingrediente</h2>

    <div class="card shadow-lg p-4" style="background-color: #F8F9FA; border-radius: 15px;">
        <form>
             
            <div class="mb-3">
                <label class="form-label fw-bold">Referencia</label>
                <input type="text" class="form-control" value="C1" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Nombre</label>
                <input type="text" class="form-control" value="Cebolla">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Cantidad</label>
                <input type="number" class="form-control" value="7">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Fecha de Ingreso</label>
                <input type="date" class="form-control" value="2025-02-28">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Fecha de Vencimiento</label>
                <input type="date" class="form-control" value="2025-03-28">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Proveedor</label>
                <input type="text" class="form-control" value="Cebollin S.A.S">
            </div>

            <button type="submit" class="btn btn-success w-100 fw-bold">💾 Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection

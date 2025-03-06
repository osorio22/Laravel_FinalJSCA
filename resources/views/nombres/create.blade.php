@extends('layouts.layout')

@section('title', 'Registro de Pedido')

@section('content')

<div class="container mt-5">
    <h2 class="text-center text-primary">🛒 Registro de Pedido</h2>

    <div class="card shadow-lg p-4" style="background-color: #F8F9FA; border-radius: 15px;">
        <form>
            @csrf 
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="orden" class="form-label fw-bold">Número de Orden</label>
                    <input type="text" class="form-control" id="orden" name="orden" placeholder="Ej: ORD-1001" required>
                </div>
                <div class="col-md-6">
                    <label for="cliente" class="form-label fw-bold">Cliente</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Ej: Juan Pérez" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="valor" class="form-label fw-bold">Valor de la Compra ($)</label>
                    <input type="number" class="form-control" id="valor" name="valor" placeholder="Ej: 25000" min="0" required>
                </div>
                <div class="col-md-6">
                    <label for="cantidad" class="form-label fw-bold">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ej: 12" min="1" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 fw-bold shadow-sm" style="background-color: #A5C9CA; border: none;">
                ✅ Guardar Pedido
            </button>
        </form>
    </div>
</div>

@endsection

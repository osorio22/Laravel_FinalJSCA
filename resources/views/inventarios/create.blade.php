@extends('layouts.layout')

@section('title', 'Registro de Producto')

@section('content')

<div class="container mt-5">
    <h2 class="text-center text-primary">🛒 Registro de Producto</h2>

    <div class="card shadow-lg p-4" style="background-color: #F8F9FA; border-radius: 15px;">
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="codigo" class="form-label fw-bold">Código del Producto</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ej: PROD-001" required>
                </div>
                <div class="col-md-6">
                    <label for="producto" class="form-label fw-bold">Nombre del Producto</label>
                    <select class="form-control" id="producto" name="producto" required>
                        <option value="" disabled selected>Seleccione un producto</option>
                        <option value="Arepa Tradicional">Arepa Tradicional</option>
                        <option value="Arepa de Choclo">Arepa de Choclo</option>
                        <option value="Arepa de Queso">Arepa de Queso</option>
                        <option value="Arepa de Carne">Arepa de Carne</option>
                        <option value="Arepa de Pollo">Arepa de Pollo</option>
                        <option value="Gaseosas">Gaseosas</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="precio" class="form-label fw-bold">Precio ($)</label>
                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Ej: 2500" min="0" required>
                </div>
                <div class="col-md-6">
                    <label for="cantidad" class="form-label fw-bold">Stock Disponible</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ej: 50" min="1" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 fw-bold shadow-sm" style="background-color: #A5C9CA; border: none;">
                ✅ Guardar Producto
            </button>
        </form>
    </div>
</div>

@endsection

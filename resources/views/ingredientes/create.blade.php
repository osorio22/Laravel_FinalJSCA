@extends('layouts.layout')

@section('title', 'Registro de Pedido')

@section('content')

<div class="container mt-5">
    <h2 class="text-center text-primary">✅ Registrar Nuevo Ingrediente</h2>

    <div class="card shadow-lg p-4" style="background-color: #F8F9FA; border-radius: 15px;">
        <form>
            @csrf 
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="ref" class="form-label fw-bold">Referencia</label>
                    <input type="text" class="form-control" id="ref" name="ref" placeholder="Mai" required>
                </div>
                <div class="col-md-6">
                    <label for="nom" class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Maiz" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="cant" class="form-label fw-bold">Cantidad </label>
                    <input type="number" class="form-control" id="cant" name="cangt" placeholder="25000" min="0" required>
                </div>
                    <div class="col-md-6">
                        <label for="f_i" class="form-label fw-bold">Fecha De Ingreso</label>
                        <input type="number" class="form-control" id="f_i" name="f_i" placeholder="12-02-2025" min="1" required>
                    </div>   
                    <div class="col-md-6">
                        <label for="f_v" class="form-label fw-bold">Fecha De vencimiento</label>
                        <input type="number" class="form-control" id="f_v" name="f_v" placeholder="12-02-2025" min="1" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="pro" class="form-label fw-bold">Proveedor</label>
                        <input type="number" class="form-control" id="pro" name="pro" placeholder="MAC POLLO" min="1" required>
                    </div>
                </div>
            </div> <br>

            <button type="submit" class="btn btn-success w-100 fw-bold shadow-sm" style="background-color: #A5C9CA; border: none;">
                ✅ Guardar Producto
                
            </button>
        </form>
    </div>
</div>

@endsection

@extends('layouts.layout')

@section('title', 'Registro de Trabajador')

@section('content')

<div class="container mt-5">
    <h2 class="text-center text-primary">🧑‍💼Formulario de registro</h2>

    <div class="card shadow-lg p-4" style="background-color: #F8F9FA; border-radius: 15px;">
        <form>
            @csrf 
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label fw-bold">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
                </div>
                <div class="col-md-6">
                    <label for="cedula" class="form-label fw-bold">Cédula</label>
                    <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Ej: 123456789" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="edad" class="form-label fw-bold">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Ej: 30" min="18" required>
                </div>
                <div class="col-md-6">
                    <label for="correo" class="form-label fw-bold">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ej: correo@empresa.com" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="direccion" class="form-label fw-bold">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ej: Calle 123 #45-67" required>
                </div>
                <div class="col-md-6">
                    <label for="eps" class="form-label fw-bold">EPS</label>
                    <input type="text" class="form-control" id="eps" name="eps" placeholder="Ej: SURA, Sanitas, Compensar" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 fw-bold shadow-sm" style="background-color: #A5C9CA; border: none;">
                ✅ Guardar Trabajador
            </button>
        </form>
    </div>
</div>

@endsection

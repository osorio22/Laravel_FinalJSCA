@extends('layouts.layout')

@section('title', 'Index Usuarios')

@section('content')

<div class="container mt-5">
        <h2 class="mb-4">Registro de Usuario</h2>
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="col-md-6">
                    <label for="cuenta" class="form-label">Cuenta</label>
                    <input type="text" class="form-control" id="cuenta" placeholder="Ingrese su cuenta">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su teléfono">
                </div>
                <div class="col-md-6">
                    <label for="correo" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    @endsection
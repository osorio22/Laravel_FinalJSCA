@extends('layouts.layout')

@section('title', 'Inventario de Productos')

@section('content')

<div class="container mt-4">
    <h2 class="text-center text-primary">📦 Inventario de Productos</h2>
    

    <div class="card p-3 shadow-lg" style="background-color:#F8F9FA;; border-radius: 15px;">
        <table class="table table-hover text-center">
            <thead class="text-white" style="background-color: #A5C9CA;">
                <tr>
                    <th scope="col"># Código</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock Disponible</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">PROD-001</th>
                    <td>Arepa Tradicional</td>
                    <td>$2,500</td>
                    <td>50</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">PROD-002</th>
                    <td>Arepa de Choclo</td>
                    <td>$3,000</td>
                    <td>30</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">PROD-003</th>
                    <td>Arepa de Queso</td>
                    <td>$3,500</td>
                    <td>20</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">PROD-004</th>
                    <td>Arepa de Carne</td>
                    <td>$4,500</td>
                    <td>15</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">PROD-005</th>
                    <td>Arepa de Pollo</td>
                    <td>$4,000</td>
                    <td>10</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">PROD-006</th>
                    <td>Gaseosas</td>
                    <td>$2,000</td>
                    <td>40</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="text-end mb-3">
        <a href="{{ route('inventarios.create') }}" class="btn btn-secondary btn-lg shadow-sm">➕ Agregar Producto</a>
    </div>
</div>

@endsection

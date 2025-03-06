@extends('layouts.layout')

@section('title', 'Listado de Pedidos')

@section('content')

<div class="container mt-4">
    <h2 class="text-center text-primary">📋 Listado de Pedidos</h2>
    

    <div class="card p-3 shadow-lg" style="background-color: #F8F9FA; border-radius: 15px;">
        <table class="table table-hover text-center">
            <thead class="text-white" style="background-color: #A5C9CA;">
                <tr>
                    <th scope="col"># Orden</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Valor de Compra</th>
                    <th scope="col">Cantidad de Arepas</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">ORD-1001</th>
                    <td>Camilo Londoño</td>
                    <td>$25,000</td>
                    <td>12</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">ORD-1002</th>
                    <td>Jacob Restrepo</td>
                    <td>$18,500</td>
                    <td>8</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">ORD-1003</th>
                    <td>Allison Bernal</td>
                    <td>$32,750</td>
                    <td>15</td>
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
        <a href="{{ route('nombres.create') }}" class="btn btn-secondary btn-lg shadow-sm">➕ Agregar Pedido</a>
    </div>
</div>

@endsection

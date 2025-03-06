@extends('layouts.layout')

@section('title', 'Listado de Pedidos')

@section('content')

<div class="container mt-4">
    <h2 class="text-center text-primary">📋 Listado de ingredientes</h2>
    

    <div class="card p-3 shadow-lg" style="background-color: #F8F9FA; border-radius: 15px;">
        <table class="table table-hover text-center">
            <thead class="text-white" style="background-color: #A5C9CA;">
                <tr>
                    <th scope="col">Referencia</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">fecha ingreso</th>
                    <th scope="col">fecha de vencimiento</th>
                    <th scope="col">Provedor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">C1</th>
                    <td>Cebolla</td>
                    <td>7</td>
                    <td>28-02-2025</td>
                    <td>28-03-2025</td>
                    <td>cebollin s.a.s</td>


                    <td>
                        <a href="{{ route('ingredientes.edit', ['id' => 'C1']) }}" class="btn btn-warning text-white"> ✏️ Modificar</a>
                        <a href="{{ route('ingredientes.destroy', ['id' => 'C1']) }}" class="btn btn-danger">🗑️ Eliminar</a>

                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">t1</th>
                    <td>Tomate</td>
                    <td>10</td>
                    <td>28-02-2025</td>
                    <td>28-03-2025</td>
                    <td>Fruver</td>
                    <td>
                        <a href="{{ route('ingredientes.edit', ['id' => 't1']) }}" class="btn btn-warning text-white"> ✏️ Modificar</a>
                        <a href="{{ route('ingredientes.destroy', ['id' => 't1']) }}" class="btn btn-danger">🗑️ Eliminar</a>

                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">car1</th>
                    <td>Carne</td>
                    <td>12 Kg</td>
                    <td>28-02-2025</td>
                    <td>28-03-2025</td>
                    <td>Carnecol</td>
                    <td>
                        <a href="{{ route('ingredientes.edit', ['id' => 'car1']) }}" class="btn btn-warning text-white"> ✏️ Modificar</a>
                        <a href="{{ route('ingredientes.destroy', ['id' => 'car1']) }}" class="btn btn-danger">🗑️ Eliminar</a>

                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">pol1</th>
                    <td>Pollo</td>
                    <td>15 kg</td>
                    <td>28-02-2025</td>
                    <td>28-03-2025</td>
                    <td>Mac pollo</td>
                    <td>
                        <a href="{{ route('ingredientes.edit', ['id' => 'pol1']) }}" class="btn btn-warning text-white"> ✏️ Modificar</a>
                        <a href="{{ route('ingredientes.destroy', ['id' => 'pol1']) }}" class="btn btn-danger">🗑️ Eliminar</a>

                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">Cho</th>
                    <td>Chocolo</td>
                    <td>30 Kg</td>
                    <td>28-02-2025</td>
                    <td>28-02-2025</td>
                    <td>Chocolo s.a.s</td>
                    <td>
                        <a href="{{ route('ingredientes.edit', ['id' => 'Cho']) }}" class="btn btn-warning text-white"> ✏️ Modificar</a>
                        <a href="{{ route('ingredientes.destroy', ['id' => 'Cho']) }}" class="btn btn-danger">🗑️ Eliminar</a>

                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <th scope="row">MAI</th>
                    <td>Maiz</td>
                    <td>12 Kg</td>
                    <td>28-02-2025</td>
                    <td>28-03-2025</td>
                    <td>Maiz del campo</td>
                    <td>
                        <a href="{{ route('ingredientes.edit', ['id' => 'MAI']) }}" class="btn btn-warning text-white"> ✏️ Modificar</a>
                        <a href="{{ route('ingredientes.destroy', ['id' => 'MAI']) }}" class="btn btn-danger">🗑️ Eliminar</a>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="text-end mb-3">
        <a href="{{ route('ingredientes.create') }}" class="btn btn-secondary btn-lg shadow-sm">➕ Agregar ingrediente</a>
    </div>

</div>

@endsection

{{-- @extends('layouts.layout')

@section('title', 'Listado de Pedidos')

@section('content')

<br>
<a href="{{ route('pedidos.create') }}" class="btn btn-success btn-lg"> Agregar Pedido </a>
<br> <br>

<table class="table">
  <thead>
    <tr>
      <th scope="col"> # Orden </th>
      <th scope="col"> Cliente </th>
      <th scope="col"> Valor de Compra </th>
      <th scope="col"> Cantidad de Arepas </th>
      <th scope="col"> OPCIONES </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">ORD-1001</th>
      <td> Camilo Londoño </td>
      <td> $25,000 </td>
      <td> 12 </td>
      <td>
        <button type="button" class="btn btn-primary"> VER </button>
        <button type="button" class="btn btn-success"> MODIFICAR </button>
        <button type="button" class="btn btn-danger"> ELIMINAR </button>
      </td>
    </tr>
    <tr>
      <th scope="row">ORD-1002</th>
      <td> Jacob Restrepo </td>
      <td> $18,500 </td>
      <td> 8 </td>
      <td>
        <button type="button" class="btn btn-primary"> VER </button>
        <button type="button" class="btn btn-success"> MODIFICAR </button>
        <button type="button" class="btn btn-danger"> ELIMINAR </button>
      </td>
    </tr>
    <tr>
      <th scope="row">ORD-1003</th>
      <td> Allison Bernal </td>
      <td> $32,750 </td>
      <td> 15 </td>
      <td>
        <button type="button" class="btn btn-primary"> VER </button>
        <button type="button" class="btn btn-success"> MODIFICAR </button>
        <button type="button" class="btn btn-danger"> ELIMINAR </button>
      </td>
    </tr>
  </tbody>
</table>

<!-- Paginación simulada -->
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

@endsection
Esto simula los pedidos con datos ficticios, manteniendo el mismo estilo que me diste. 







@extends('layouts.layout')

@section('title', 'Cards de Productos')

@section('content')

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 shadow">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Producto 1">
                <div class="card-body">
                    <h5 class="card-title">Arepas de Queso</h5>
                    <p class="card-text">Deliciosas arepas rellenas de queso fresco, ideales para el desayuno.</p>
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 shadow">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Arepas Rellenas</h5>
                    <p class="card-text">Arepas rellenas con pollo, carne o cerdo. ¡Elige tu favorita!</p>
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 shadow">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Producto 3">
                <div class="card-body">
                    <h5 class="card-title">Arepas de Choclo</h5>
                    <p class="card-text">Dulces, suaves y con queso derretido. Perfectas para acompañar con café.</p>
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 shadow">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Producto 4">
                <div class="card-body">
                    <h5 class="card-title">Arepas Integrales</h5>
                    <p class="card-text">Hechas con harina integral, ideales para una alimentación saludable.</p>
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection --}}
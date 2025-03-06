@extends('layouts.layout')

@section('title', 'Index Usuarios')

@section('content')


<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      
      <!-- Card 1 -->
      <div class="col">
          <div class="card h-100 shadow">
              <img src="https://img.freepik.com/vector-gratis/pantallas-embarque-entrega-alimentos_23-2148566072.jpg?t=st=1740895305~exp=1740898905~hmac=198643d5ff67b1a947c3ffadfc03d5fe77b6434a2f17760377a4e5dc2c98fe8f&w=1800" class="card-img-top" width="150%" height="150%" alt="..."><br>
              
              <div class="card-body">
                  <h5 class="text-center d-block">Pedidos </h5>
                  <p class="text-center d-block">Revisa que pedidos has tenido hasta la fecha y crea nuevos pedidos de venta para que sigas creciendo como compañia </p>
                  <div class="text-center d-block">
                    <a href="{{ route('nombres.index') }}" class="btn btn-outline-primary" >Pedidos De Venta</a> </button>
                  </div>
                 
              
                  
              </div>
          </div>
      </div>

      <!-- Card 2 -->
      <div class="col">
          <div class="card h-100 shadow">
            <img src="https://img.freepik.com/vector-gratis/conjunto-despensa-diseno-plano-diferentes-alimentos_23-2148720680.jpg?t=st=1740896055~exp=1740899655~hmac=95d016ccf6f03e4296347b60cfe567bf697db5b80b560e7ed53c9e88bb418e2f&w=1060" class="card-img-top" width="150%" height="150%" alt="...">
              <div class="card-body">
               
                  <h5 class="text-center d-block">Inventario De Productos</h5>
                  <p class="text-center d-block">Se tu mismo el dueño de tu negocio apropiate de la informacion de tu inventario</p>
                  
                  <div class="text-center d-block">
                    <a href="{{ route('inventarios.index') }}" class="btn btn-outline-primary">Gestionar inventario</a> </button>    
                  </div>
                  
                  
              </div>
          </div>
      </div>
        
             <!-- Card 3 -->
      <div class="col">
        <div class="card h-100 shadow">
            <img src="https://img.freepik.com/vector-gratis/vista-superior-arepas-diseno-dibujado-mano_52683-45906.jpg?t=st=1740896217~exp=1740899817~hmac=58284967d3c57c6ad98dc90a334739b01afdb1ce72a0afeaca20e489e670d782&w=1800" class="card-img-top" width="60%" height="60%" alt="...">

            <div class="card-body">
                <h5 class="text-center d-block">Ingredientes</h5>
                <p class="text-center d-block">ten un registro directo de los ingredientes del produnto donde los puedes gestionar y crear </p>
               
               <div class="text-center d-block" > 
                  <a href="{{ route('ingredientes.index') }}" class="btn btn-outline-primary">Gestionar ingredientes</a> </button>
               </div>
               

            </div>
        </div>
    </div>


      <!-- Card 4 -->
      <div class="col">
          <div class="card h-100 shadow">
              <img src="https://img.freepik.com/vector-gratis/coleccion-trabajadores-supermercados-personas-delantales_23-2148528147.jpg?t=st=1740898181~exp=1740901781~hmac=eee623ca8325dc6846f4464de8a3ef5ac7d82ffec344c0989cde71b9b8cdfeb1&w=1800"  class="card-img-top" width="60%" height="60%" alt="...">
              <div class="card-body">
                  <h5 class="text-center d-block">Colaboradores</h5>
                  <p class="text-center d-block">llevar un buen control con los colaboradores es crucial, por ende te brindamos este espacio </p>
                  <div class="text-center d-block">
                    <a href="{{ route('trabajadores.index') }}" class="btn btn-outline-primary">Consultar</a> </button>
                  </div>
                  
              </div>
          </div>
      </div>

  </div>
</div>

@endsection
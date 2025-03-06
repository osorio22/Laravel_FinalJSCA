@extends('layouts.layout')

@section('title', 'Listado de Trabajadores')

@section('content')

<div class="container mt-4">
    <h2 class="text-center text-primary">📋 Listado de Trabajadores</h2>
    


    <div class="card p-3 shadow-lg" style="background-color: #F8F9FA; border-radius: 15px;">
        <table class="table table-hover text-center">
            <thead class="text-white" style="background-color: #A5C9CA;">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">EPS</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: #E3FDFD;">
                    <td>Camilo Londoño</td>
                    <td>1012345678</td>
                    <td>30</td>
                    <td>camilo.londono@example.com</td>
                    <td>Calle 45 #23-10</td>
                    <td>SURA</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <td>Laura Pérez</td>
                    <td>1023456789</td>
                    <td>28</td>
                    <td>laura.perez@example.com</td>
                    <td>Cra 12 #34-56</td>
                    <td>Sanitas</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <td>Andrés Restrepo</td>
                    <td>1034567890</td>
                    <td>35</td>
                    <td>andres.restrepo@example.com</td>
                    <td>Av 68 #89-12</td>
                    <td>Compensar</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <td>Sofía Ramírez</td>
                    <td>1045678901</td>
                    <td>26</td>
                    <td>sofia.ramirez@example.com</td>
                    <td>Calle 78 #45-67</td>
                    <td>Famisanar</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <td>Diego Torres</td>
                    <td>1056789012</td>
                    <td>40</td>
                    <td>diego.torres@example.com</td>
                    <td>Cra 15 #20-90</td>
                    <td>Nueva EPS</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>
                <tr style="background-color: #E3FDFD;">
                    <td>Mariana López</td>
                    <td>1067890123</td>
                    <td>29</td>
                    <td>mariana.lopez@example.com</td>
                    <td>Calle 10 #5-30</td>
                    <td>Salud Total</td>
                    <td>
                        
                        <button type="button" class="btn btn-warning text-white">✏️ Modificar</button>
                        <button type="button" class="btn btn-danger">🗑️ Eliminar</button>
                    </td>
                </tr>

                <tr style="background-color: #E3FDFD;">
                    <td>Valentina Gómez</td>
                    <td>1089012345</td>
                    <td>31</td>
                    <td>valentina.gomez@example.com</td>
                    <td>Cra 50 #89-45</td>
                    <td>SURA</td>
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
        <a href="{{ route('trabajadores.create') }}" class="btn btn-secondary btn-lg shadow-sm">➕ Agregar Trabajador</a>
    </div>

</div>

@endsection







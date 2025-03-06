<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ingredientes.index2');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ingrediente $id)
    {
        
        $ingrediente = Ingrediente::find($id); // Recuperar el ingrediente

        if ($ingrediente) {
            // Aquí puedes usar array_key_exists sin problema
        } else {
            return redirect()->back()->with('error', 'Ingrediente no encontrado.');
        }
        
        $ingredientes = [
            'C1'  => ['nombre' => 'Cebolla', 'cantidad' => '7kg', 'fecha_ingreso' => '2025-02-28', 'fecha_vencimiento' => '2025-03-28', 'proveedor' => 'Cebollin S.A.S'],
            't1'  => ['nombre' => 'Tomate', 'cantidad' => '10 kg', 'fecha_ingreso' => '2025-02-28', 'fecha_vencimiento' => '2025-03-28', 'proveedor' => 'Fruver'],
            'car1' => ['nombre' => 'Carne', 'cantidad' => '12 Kg', 'fecha_ingreso' => '2025-02-28', 'fecha_vencimiento' => '2025-03-28', 'proveedor' => 'Carnecol'],
            'pol1' => ['nombre' => 'Pollo', 'cantidad' => '15 Kg', 'fecha_ingreso' => '2025-02-28', 'fecha_vencimiento' => '2025-03-28', 'proveedor' => 'Mac Pollo'],
            'Cho'  => ['nombre' => 'Chocolo', 'cantidad' => '30 Kg', 'fecha_ingreso' => '2025-02-28', 'fecha_vencimiento' => '2025-02-28', 'proveedor' => 'Chocolo S.A.S'],
            'MAI'  => ['nombre' => 'Maiz', 'cantidad' => '12 Kg', 'fecha_ingreso' => '2025-02-28', 'fecha_vencimiento' => '2025-03-28', 'proveedor' => 'Maiz del Campo'],
        ];
      
        // Enviar los datos a la vista
        return view('ingredientes.edit');
    }
        
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ingrediente $ingrediente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $ingrediente = Ingrediente::where('referencia', $id)->firstOrFail(); // Buscar el ingrediente
    $ingrediente->delete(); // Eliminar el registro

    return redirect()->route('ingredientes.destroy')->with('success', 'Ingrediente eliminado correctamente');
}

}

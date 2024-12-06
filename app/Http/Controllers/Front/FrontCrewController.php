<?php

namespace App\Http\Controllers\Front;

use App\Models\Crew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontCrewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Recuperar valores del formulario de búsqueda
        $search = $request->input('search'); // Búsqueda por nombre
        $capacity = $request->input('capacity'); // Búsqueda por capacidad

        // Iniciar consulta base
        $query = Crew::query();

        // Filtrar por nombre (si se proporciona)
        if (!empty($search)) {
            $query->where('name', 'like', "%{$search}%");
        }

        // Filtrar por capacidad (si se proporciona)
        if (!empty($capacity)) {
            $query->where('capacity', '<=', (int)$capacity);
        }

        // Obtener resultados paginados
        $crews = $query->paginate(10); // Mostrar 10 resultados por página

        // Pasar los datos a la vista
        return view('front.crews.index', compact('crews', 'search', 'capacity'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Crew $crew)
    {
        return view('front.crews.show', compact('crew'));
    }
}

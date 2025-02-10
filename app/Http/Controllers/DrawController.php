<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Location;
use Illuminate\Http\Request;

class DrawController extends Controller
{
    const MAX_HEIGHT = 5;
    const MAX_WIDTH = 5;

    // Nuevo método index para resource
    public function index()
    {
        return redirect()->route('draw.show'); // o llama a show() si prefieres: return $this->show();
    }

    // Show the Draw View for a specific year
    public function show($year = null)
    {
        $currentYear = now()->year;
        if (is_null($year)) {
            $year = $currentYear;
        }
        $locations = Location::where('year', $year)->with('crew')->get();
        $showDrawButton = true;
        $rangeYears = range($currentYear - 4, $currentYear);
        rsort($rangeYears);

        // Cambiar la vista para que use el layout del backoffice
        return view('back.draws.index', [
            'locations'       => $locations,
            'year'            => $year,
            'showDrawButton'  => $showDrawButton,
            'rangeYears'      => $rangeYears,
            'matrixWidth'     => self::MAX_WIDTH,
            'matrixHeight'    => self::MAX_HEIGHT
        ]);
    }

    // Perform the draw process and assign locations to crews
    public function draw(Request $request)
    {
        $year = $request->year ?? now()->year;
        $crews = Crew::all()->pluck('name', 'id');
        $locations = Location::where('year', $year)->get();

        if (count($crews) === 0) {
            return back()->withErrors('No hay peñas disponibles para este año.');
        }

        // Eliminar sorteos existentes para evitar duplicados
        Location::where('year', $year)->delete();

        $places = [];
        $nCrews = count($crews);

        // Assign random valid coordinates to each crew
        foreach($crews as $crewId => $crewName){
            $isValidCoord = false;
            while(!$isValidCoord){
                $x = rand(0, (self::MAX_WIDTH-1));
                $y = rand(0, (self::MAX_HEIGHT-1));
                $coord = [$x, $y];
                $isValidCoord = $this->isValidCoord($coord, $places);
                if($isValidCoord){
                    $places[$crewId] = $coord;
                }
            }
        }

        $newLocations = [];
        foreach ($places as $crewId => $coord) {
            $newLocations[] = [
                'x_coordinate' => $coord[0], // coordenada X
                'y_coordinate' => $coord[1], // coordenada Y
                'crew_id' => $crewId,
                'year' => $year
            ];
        }
        //Save locations in DB
        foreach ($newLocations as $location) {
            Location::create($location);
        }

        return redirect()->route('draw.show', ['year' => $year]);
    }

    private function isValidCoord($coord, $places)
    {
        $isValidCoord = true;
        list($x, $y) = $coord;
        if(in_array($coord, $places)){
            $isValidCoord = false;
        }
        return $isValidCoord;
    }
}

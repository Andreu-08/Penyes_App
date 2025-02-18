<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Crew; // Asegúrate de importar el modelo Crew

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['crew_id', 'x_coordinate', 'y_coordinate', 'year'];

    // Nueva relación para acceder a la peña asociada
    public function crew()
    {
        return $this->belongsTo(Crew::class, 'crew_id');
    }

    public function draw()
    {
        return $this->hasOne(Draw::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draw extends Model
{
    use HasFactory;

    protected $fillable = ['location_id', 'crew_id', 'year'];

    // Relaciones
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function crew()
    {
        return $this->belongsTo(Crew::class);
    }
}

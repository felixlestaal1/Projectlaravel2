<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    protected $primaryKey = 'codVehiculo';
    protected $fillable=[
        "Descripcion"
    ];
    public function reservaciones()
    {
        return $this->belongsTo(Reserva::class, 'codVehiculo', 'codVehiculo');
    }
}

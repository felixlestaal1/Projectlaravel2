<?php

namespace App\Models;

use App\Http\Controllers\AutoController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $primaryKey = 'codReserva';
    protected $fillable=[
        "codVehiculo",
        "fecha",
        "destino",
        "kilometros",
        "codEmpleado"
    ];
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'codEmpleado', 'codEmpleado');
    }
    public function vehiculos(){
        return $this->hasMany(Auto::class,'codVehiculo','codVehiculo');
    }
}

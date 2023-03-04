<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $primaryKey = 'codEmpleado';
    protected $fillable=[
        "nombre",
        "apellidos",
        "salario",
        "codOficina",
        "fecha"
    ];
    public function oficinas()
    {
        return $this->belongsTo(Oficina::class,'codOficina','codOficina');
    }
}

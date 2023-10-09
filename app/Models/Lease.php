<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    use HasFactory;

    protected $table='lease';

    protected $fillable=['nombre_cliente','apellido_paterno','apellido_materno','email','patente','fecha_entrega','fecha_devolucion'];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'patente', 'patent' );
    }
}

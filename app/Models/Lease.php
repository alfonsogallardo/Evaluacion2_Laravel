<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    use HasFactory;

    protected $table='leases';

    protected $fillable=['nombre_cliente','apellido_paterno','apellido_materno','rut','email','vehicle_id','fecha_entrega','fecha_devolucion'];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id' );
    }
}

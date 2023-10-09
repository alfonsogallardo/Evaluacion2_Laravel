<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    use HasFactory;

    protected $table='lease';

    protected $fillable=['name_client','apellido_paterno','apellido_materno','email','patente','fecha_entrega','fecha_devolucion'];
}

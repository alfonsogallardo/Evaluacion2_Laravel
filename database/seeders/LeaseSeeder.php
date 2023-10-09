<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leases')->insert([
            [
                'nombre_cliente' => 'Juan',
                'apellido_paterno' => 'Pérez',
                'apellido_materno' => 'Gómez',
                'email' => 'juan.perez@example.com',
                'vehicle_id' => 1, // Debe existir un vehículo con id 1 en tu base de datos
                'fecha_entrega' => '2023-10-15',
                'fecha_devolucion' => '2023-10-20',
            ],
            [
                'nombre_cliente' => 'María',
                'apellido_paterno' => 'López',
                'apellido_materno' => 'Martínez',
                'email' => 'maria.lopez@example.com',
                'vehicle_id' => 2, // Debe existir un vehículo con id 2 en tu base de datos
                'fecha_entrega' => '2023-10-18',
                'fecha_devolucion' => '2023-10-22',
            ],
            // Agrega más arriendos según tus necesidades
        ]);
    }
}

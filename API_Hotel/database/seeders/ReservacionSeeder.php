<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservacionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reservaciones')->insert([
            'Habitacion'=>"Individual",
            'FechaEntrada'=>"2024/02/12",
            'FeechaSalida'=>"2024/02/16",
            'Precio'=>512.25,
        ]);
        DB::table('reservaciones')->insert([
            'Habitacion'=>"Doble",
            'FechaEntrada'=>"2024/03/05",
            'FeechaSalida'=>"2024/03/09",
            'Precio'=>851.5,
        ]);
    }
}

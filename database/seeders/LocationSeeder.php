<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class LocationSeeder extends Seeder
{

    public function run()
    {
        Province::factory()
            ->count(24)
            ->state(new Sequence(
                ["provincias" => "Azuay"],
                ["provincias" => "Bolívar"],
                ["provincias" => "Cañar"],
                ["provincias" => "Carchi"],
                ["provincias" => "Chimborazo"],
                ["provincias" => "Cotopaxi"],
                ["provincias" => "El Oro"],
                ["provincias" => "Esmeraldas"],
                ["provincias" => "Galápagos"],
                ["provincias" => "Guayas"],
                ["provincias" => "Imbabura"],
                ["provincias" => "Loja"],
                ["provincias" => "Los Ríos"],
                ["provincias" => "Manabí"],
                ["provincias" => "Morona Santiago"],
                ["provincias" => "Napo"],
                ["provincias" => "Orellana"],
                ["provincias" => "Pastaza"],
                ["provincias" => "Pichincha"],
                ["provincias" => "Santa Elena"],
                ["provincias" => "Santo Domingo de los Tsáchilas"],
                ["provincias" => "Sucumbíos"],
            ))
            ->create();


    }
}


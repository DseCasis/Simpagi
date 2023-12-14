<?php

namespace Database\Seeders;

use App\Models\AssociatedLocation;
use App\Models\ExperimentalStation;
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
                ["provincias" => "Santo Domingo"],
                ["provincias" => "Sucumbíos"],
            ))
            ->create();

        $stations = [
            ['estacion_experimental' => 'Administraciòn Central', 'province_id' => 19],
            ['estacion_experimental' => 'Estación Experimental Santa Catalina', 'province_id' => 19],
            ['estacion_experimental' => 'Estación Experimental Tropical Pichilingue', 'province_id' => 13],
            ['estacion_experimental' => 'Estación Experimental Portoviejo', 'province_id' => 14],
            ['estacion_experimental' => 'Estación Experimental Santo Domingo', 'province_id' => 21],
            ['estacion_experimental' => 'Estación Experimental Austro', 'province_id' => 1],
            ['estacion_experimental' => 'Estación Experimental Central De La Amazonia', 'province_id' => 17],
            ['estacion_experimental' => 'Estación Experimental Litoral Del Sur', 'province_id' => 10],
        ];

        foreach ($stations as $station) {
            ExperimentalStation::create($station);
        }

        $associated = [
            ['localidad_asociada' => 'Administracion Central', 'experimental_station_id' => 1],
            ['localidad_asociada' => 'Austro', 'experimental_station_id' => 6],
            ['localidad_asociada' => 'Central De La Amazonia', 'experimental_station_id' => 7],
            ['localidad_asociada' => 'Litoral Sur', 'experimental_station_id' => 8],
            ['localidad_asociada' => 'Portoviejo', 'experimental_station_id' => 4],
            ['localidad_asociada' => 'Santa Catalina', 'experimental_station_id' => 2],
            ['localidad_asociada' => 'Tropical Pichilingue', 'experimental_station_id' => 3],
        ];

        foreach ($associated as $associate) {
            $locacion = new AssociatedLocation($associate);
            $locacion->save();
        }


    }
}

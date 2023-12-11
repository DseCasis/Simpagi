<?php

namespace Database\Seeders;

use App\Models\Canton;
use App\Models\Province;
use Illuminate\Database\Seeder;

class CantonSeeder extends Seeder
{


    public function run()
    {
        //Provincias del Azuay
        $azuay = Province::where('provincias', 'Azuay')->first();
        if ($azuay) {
            $cantonesAzuay = [
                'Ambato', 'Baños de Agua Santa', 'Cañar', 'Cevallos', 'Chordeleg', 'Cuenca', 'El Pan', 'Girón', 'Gualaceo', 'Huamboya', 'Mocha', 'Nabón', 'Paute', 'Pelileo', 'Santa Isabel', 'Sigsig', 'Sígsig', 'Santiago de Méndez', 'Suscal', 'Tarqui', 'Tocancipá', 'Turi', 'Yunguilla'
            ];
            foreach ($cantonesAzuay as $cantonAzuay) {
                Canton::factory()
                    ->create(['province_id' => $azuay->id,
                        'cantones' => $cantonAzuay]);
            }
        }

        //Cantones de Bolivar
        $bolivar = Province::where('provincias', 'Bolivar')->first();
        if ($bolivar) {
            $cantonesBolivar = [
                'Calvas', 'Camilo Ponce Enríquez', 'Guaranda', 'Las Naves', 'San Miguel', 'San Pablo de Atenas', 'Santiago de Píllaro', 'Sígsig', 'Zaruma'];
            foreach ($cantonesBolivar as $cantonBolivar) {
                Canton::factory()
                    ->create(['province_id' => $bolivar->id,
                        'cantones' => $cantonBolivar]);
            }
        }

        //Cantones de Cañar
        $Canar = Province::where('provincias', 'Cañar')->first();
        if ($Canar) {
            $cantonesCanar = [
                'Azogues', 'Cañar', 'El Tambo', 'Girón', 'La Troncal', 'Naranjal', 'Biblián', 'Déleg', 'El Carmen de Pintag', 'Suscal'
            ];
            foreach ($cantonesCanar as $cantonCanar) {
                Canton::factory()
                    ->create(['province_id' => $Canar->id,
                        'cantones' => $cantonCanar]);
            }
        }

        //Cantones de Carchi
        $Carchi = Province::where('provincias', 'Carchi')->first();
        if ($Carchi) {
            $cantonesCarchi = [
                'Archidona', 'Bolívar', 'El Ángel', 'Espejo', 'Mira', 'Montúfar', 'San Pedro de Huaca'
            ];
            foreach ($cantonesCarchi as $cantonCarchi) {
                Canton::factory()
                    ->create(['province_id' => $Carchi->id,
                        'cantones' => $cantonCarchi]);
            }
        }

        //Chimborazo
        $Chimborazo = Province::where('provincias', 'Chimborazo')->first();
        if ($Chimborazo) {
            $cantonesChimborazo = [
                'Chimborazo', 'Chunchi', 'Colta', 'Guamote', 'Guano', 'Pallatanga', 'Penipe', 'Riobamba', 'San Fernando', 'Santa Rosa'
            ];
            foreach ($cantonesChimborazo as $cantonChimborazo) {
                Canton::factory()
                    ->create(['province_id' => $Chimborazo->id,
                        'cantones' => $cantonChimborazo]);
            }
        }

        //Cantones de Cotopaxi
        $Cotopaxi = Province::where('provincias', 'Cotopaxi')->first();
        if ($Cotopaxi) {
            $cantonesCotopaxi = [
                'Latacunga', 'Antonio Ante', 'Cayambe', 'Latacunga', 'Mejía', 'Pujilí', 'Saquisilí', 'Sigchos', 'Tomabela', 'Pujilí'
            ];
            foreach ($cantonesCotopaxi as $cantonCotopaxi) {
                Canton::factory()
                    ->create(['province_id' => $Cotopaxi->id,
                        'cantones' => $cantonCotopaxi]);
            }
        }

        //Cantones de El Oro
        $elOro = Province::where('provincias', 'El Oro')->first();
        if ($elOro) {
            $cantoneselOro = [
                'Arenillas', 'Balsas', 'Chilla', 'El Guabo', 'Huaquillas', 'Machala', 'Marcabelí', 'Pasaje', 'Piñas', 'Portovelo', 'Santa Rosa', 'Zaruma'
            ];
            foreach ($cantoneselOro as $cantonelOro) {
                Canton::factory()
                    ->create(['province_id' => $elOro->id,
                        'cantones' => $cantonelOro]);
            }
        }

        //Cantones de pichincha
        $pichincha = Province::where('provincias', 'Pichincha')->first();
        if ($pichincha) {
            $cantonesPichincha = [
                'Quito',
                'Cayambe',
                'Rumiñahui',
                'Mejía',
                'Pedro Moncayo',
                'San Miguel de los Bancos',
                'Pedro Vicente Maldonado',
                'Puerto Quito',
            ];
            foreach ($cantonesPichincha as $cantonPichincha) {
                Canton::factory()
                    ->create(['province_id' => $pichincha->id,
                        'cantones' => $cantonPichincha]);
            }

                //lista de los cantones del guayas
        $guayas = Province::where('provincias', 'Guayas')->first();
        if ($guayas) {
            $cantonesGuayas = [
                "Guayaquil", "Alfredo Baquerizo Moreno", "Balao", "Balzar", "Colimes", "Daule", "Durán", "El Empalme", "El Triunfo", "Antonio Elizalde (Bucay)", "Isidro Ayora", "Lomas de Sargentillo", "Marcelino Maridueña", "Milagro", "Naranjal", "Naranjito", "Nobol", "Palestina", "Pedro Carbo", "Playas", "Salitre", "Samborondón", "Santa Lucía", "Simón Bolívar", "Yaguachi"
            ];
            foreach ($cantonesGuayas as $cantonGuayas) {
                Canton::factory()
                    ->create(['province_id' => $guayas->id,
                        'cantones' => $cantonGuayas]);
            }
        }
    }
}
}

<?php

namespace Database\Seeders;

use App\Models\Line_Research;
use App\Models\LineResearch;
use App\Models\Research_Area;
use App\Models\Rubro;
use Illuminate\Database\Seeder;

class RubrosSeeder extends Seeder
{

    public function run()
    {
        $rubros = [
            ['rubro'=> 'Cultivos', 'category' => 'Cultivos'],
            ['rubro'=> 'Cereales', 'category' => 'Cultivos'],
            ['rubro'=> 'Leguminosas', 'category' => 'Cultivos'],
            ['rubro'=> 'Tubérculos', 'category' => 'Cultivos'],
            ['rubro'=> 'Raíces', 'category' => 'Cultivos'],
            ['rubro'=> 'Frutas', 'category' => 'Cultivos'],
            ['rubro'=> 'Hortalizas', 'category' => 'Cultivos'],
            ['rubro'=> 'Plantas medicinales', 'category' => 'Cultivos'],
            ['rubro'=> 'Ganadería', 'category' => 'Ganadería'],
            ['rubro'=> 'Bovinos', 'category' => 'Ganadería'],
            ['rubro'=> 'Ovinos', 'category' => 'Ganadería'],
            ['rubro'=> 'Caprinos', 'category' => 'Ganadería'],
            ['rubro'=> 'Porcinos', 'category' => 'Ganadería'],
            ['rubro'=> 'Aves', 'category' => 'Ganadería'],
            ['rubro'=> 'Alimentación animal', 'category' => 'Otras'],
            ['rubro'=> 'Piscicultura', 'category' => 'Otras'],
            ['rubro'=> 'Forestería', 'category' => 'Otras'],
            ['rubro'=> 'Agroindustria', 'category' => 'Otras'],
            ['rubro'=> 'Medio ambiente', 'category' => 'Otras'],
        ];

        foreach ($rubros as $rubro) {
            $model = new Rubro();
            $model->rubro = $rubro['rubro'];
            $model->category = $rubro['category'];
            $model->save();
        }

        //Linea de investigacion Seeders

        $lineas_investigacion = [
            ['linea_investigacion' => 'Mejoramiento genético de cultivos'],
            ['linea_investigacion' => 'Mejoramiento genético de animales'],
            ['linea_investigacion' => 'Manejo integrado de plagas y enfermedades'],
            ['linea_investigacion' => 'Seguridad alimentaria y nutricional'],
            ['linea_investigacion' => 'Desarrollo de tecnologías agroecológicas'],
            ['linea_investigacion' => 'Producción y transformación de alimentos'],
            ['linea_investigacion' => 'Manejo de recursos naturales'],
            ['linea_investigacion' => 'Conservación de la biodiversidad'],
            ['linea_investigacion' => 'Innovación tecnológica'],
        ];

        foreach ($lineas_investigacion as $linea_investigacion) {
            $model = new LineResearch();
            $model->linea_investigacion = $linea_investigacion['linea_investigacion'];
            $model->save();
        }
    }
}

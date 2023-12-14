<?php

namespace Database\Seeders;

use App\Models\AcademicTitle;
use App\Models\Area;
use App\Models\Busy;
use App\Models\EthnicGroup;
use App\Models\Funding;

use App\Models\GeneralBudget;
use App\Models\InvestmentProject;
use App\Models\Management;
use App\Models\ModalitiesType;
use App\Models\Modality;
use App\Models\Nationality;
use App\Models\PositionType;
use App\Models\PriorityGroup;
use App\Models\Process;
use App\Models\Regimen;
use App\Models\Scale;
use App\Models\Training;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class UserSedder extends Seeder
{
    public function run()
    {
        $grupos = [
            ["grupo_prioritario" => "Director"],
            ["grupo_prioritario" => "Discapacidad"],
            ["grupo_prioritario" => "Embarazo"],
            ["grupo_prioritario" => "Lactancia"],
            ["grupo_prioritario" => "Maternidad"],
            ["grupo_prioritario" => "Sustituto"],
        ];

        foreach ($grupos as $grupo) {
            PriorityGroup::create($grupo);
        }

        //Nacionalidades
        $nacionals = [
            ['nacionalidad'=> 'Ecuatoriano/a'],
            ['nacionalidad'=> 'Colombiano/a']
        ];

        foreach ($nacionals as $nacional) {
            Nationality::create($nacional);
        }

        //Grupos Etnicos
        $ethnic_groups = [
            ['grupo_etnico'=> 'AfroEcuatoriano'],
            ['grupo_etnico'=> 'Indígena'],
            ['grupo_etnico'=> 'Mestizo'],
            ['grupo_etnico'=> 'Montubio'],
        ];

        foreach ($ethnic_groups as $ethnic_group) {
            EthnicGroup::create($ethnic_group);
        }

        //Formacion Academica
        $trainings = [
            ['formacion_academica'=> 'Sin Instrucción'],
            ['formacion_academica'=> 'Educación Básica'],
            ['formacion_academica'=> 'Bachiller'],
            ['formacion_academica'=> 'Egresado/a'],
            ['formacion_academica'=> 'Técnico Superior/ Tecnologia'],
            ['formacion_academica'=> 'Tercer Nivel'],
            ['formacion_academica'=> 'Cuarto Nivel'],
        ];

        foreach ($trainings as $training) {
            Training::create($training);
        }

        //Tipo de titulo de cuarto nivel
        $trainings = [
            ['titulo_academico'=> 'No Aplica'],
            ['titulo_academico'=> 'Diplomado'],
            ['titulo_academico'=> 'Maestria'],
            ['titulo_academico'=> 'Doctorado'],
            ['titulo_academico'=> 'Doctorado equivalente a PHD'],
        ];

        foreach ($trainings as $training) {
            AcademicTitle::create($training);
        }

        //Escala
        $scales = [
            ['escala'=> 'Nivel 1'],
            ['escala'=> 'Nivel 2'],
            ['escala'=> 'Nivel 3'],
            ['escala'=> 'Nivel 4'],
            ['escala'=> 'Nivel 5'],
            ['escala'=> 'Nivel 6'],
            ['escala'=> 'Nivel 7'],
            ['escala'=> 'Nivel 8'],
            ['escala'=> 'Nivel 9'],
        ];

        foreach ($scales as $scale) {
            Scale::create($scale);
        }

        //Tipo de posiciones
        $position_types = [
            ['tipo_cargo'=> 'Asesor'],
            ['tipo_cargo'=> 'Director'],
            ['tipo_cargo'=> 'Investigador'],
            ['tipo_cargo'=> 'Personal De Apoyo'],
            ['tipo_cargo'=> 'Personal De Servicio'],
            ['tipo_cargo'=> 'Técnico I+D'],
            ['tipo_cargo'=> 'Técnico I+D+i'],
        ];

        foreach ($position_types as $position_type) {
            PositionType::create($position_type);
        }

        //Fondos
        $fundings = [
            ['fondo'=> '51'],
            ['fondo'=> '71'],
        ];

        foreach ($fundings as $funding) {
            Funding::create($funding);
        }

        //Proyecto de inversion
        $proyectos = [
            ['name' => 'Musaseos', 'funding_id' => 2],
        ];

        foreach ($proyectos as $data) {
            $proyecto = new InvestmentProject($data);
            $proyecto->save();
        }

        //Regimen
        $regimens = [
            ['regimenes'=> 'Código Del Trabajo'],
            ['regimenes'=> 'Losep'],
        ];

        foreach ($regimens as $regimen) {
            Regimen::create($regimen);
        }

        //Modalidad
        $modalitys = [
            ['modalidad' => 'Contrato De Servicios Ocacionales', 'regimene_id' => 2],
            ['modalidad' => 'Nombramiento LN Remoción', 'regimene_id' => 2],
            ['modalidad' => 'Nombremiento Periodo Fijo', 'regimene_id' => 2],
            ['modalidad' => 'Nombramiento Permanente', 'regimene_id' => 2],
            ['modalidad' => 'Nombramiento Provisional', 'regimene_id' => 2],
            ['modalidad' => 'Indefinido', 'regimene_id' => 1],
        ];

        foreach ($modalitys as $modality) {
            $regimen = new Modality($modality);
            $regimen->save();
        }

        //Tipo de modalidad
        $types = [
            ['modalidad' => 'Inversión', 'modality_id' => 1],
            ['modalidad' => 'NJS Asesora', 'modality_id' => 1],
            ['modalidad' => 'Prorrogadodt Undécima', 'modality_id' => 1],
            ['modalidad' => 'Prorrogado Permanente', 'modality_id' => 1],
            ['modalidad' => 'Planificación de CMO', 'modality_id' => 5],
        ];

        foreach ($types as $type) {
            $modalidad = new ModalitiesType($type);
            $modalidad->save();
        }

        //Proceso
        $process = [
            ['proceso'=> 'Adjetivo'],
            ['proceso'=> 'Gobernante'],
            ['proceso'=> 'Sustantivo'],
        ];

        foreach ($process as $proces) {
            Process::create($proces);
        }

        //Unidad
        $units = [
            ['unidad' => 'Direccion Administrativa Financiera', 'process_id' => 1],
            ['unidad' => 'Dirección de Administracion', 'process_id' => 1],
            ['unidad' => 'Dirección De Estación Experimental', 'process_id' => 2],
            ['unidad' => 'Dirección Ejecutiva', 'process_id' => 2],
            ['unidad' => 'Dirección De Innovacion', 'process_id' => 2],
            ['unidad' => 'Dirección De Investigaciones', 'process_id' => 3],
            ['unidad' => 'Dirección de Producción', 'process_id' => 3],
        ];

        foreach ($units as $unit) {
            $proceso = new Unit($unit);
            $proceso->save();
        }

        //Gestion
        $managements = [
            ['gestion' => 'Direccion Administrativa Financiera', 'units_id' => 1],
            ['gestion' => 'Gestión Administrativa', 'units_id' => 1],
            ['gestion' => 'Administración De Nomina', 'units_id' => 2],
            ['gestion' => 'Dirección Ejecutiva', 'units_id' => 2],
            ['gestion' => 'Administrativo', 'units_id' => 3],
            ['gestion' => 'Direccion de Estacion Experimental', 'units_id' => 3],
        ];

        foreach ($managements as $management) {
            $unidades = new Management($management);
            $unidades->save();
        }

        //Area
        $areas = [
            ['area' => 'Direccion Administrativa Financiera', 'management_id' => 3],
        ];

        foreach ($areas as $area) {
            $gestiones = new Area($area);
            $gestiones->save();
        }

        //Partida Presupuestaria General
        $budgets = [
            ['partida_presupuestaria_general' => '202339000050000010000000100051010000100000000',
                'experimental_station_id' => 5],
        ];

        foreach ($budgets as $budget) {
            $gestiones = new GeneralBudget($budget);
            $gestiones->save();
        }

        //partida ocupada
        $partidas = [
            ['ocupado'=> 'Vacante'],
            ['ocupado'=> 'Ocupado'],
        ];

        foreach ($partidas as $partida) {
            Busy::create($partida);
        }

    }
}

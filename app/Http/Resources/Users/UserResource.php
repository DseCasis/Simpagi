<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
                'id'=> $this->id,
                'cedula'=>$this->cedula,
                'nombre'=>$this->nombre,
                'apellido'=>$this->apellido,
                'genero'=>$this->genero,
                'fecha_nacimiento'=>$this->fecha_nacimiento,
                'fecha_ingreso'=>$this->fecha_ingreso,
                'numero_imposiciones'=>$this->numero_imposiciones,
                'titulo_academico'=>$this->titulo_academico,
                'telefono_institucional'=>$this->telefono_institucional,
                'textension_telefonica'=>$this->textension_telefonica,
                'correo_institucional'=>$this->correo_institucional,
                'actividad_esigef'=>$this->actividad_esigef,
                'remuneracion'=>$this->remuneracion,
                'viatico_residencia'=>$this->viatico_residencia,
                'migrante_retornado'=>$this->migrante_retornado,
        ];
    }
}

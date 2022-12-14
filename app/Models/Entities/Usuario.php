<?php

namespace App\Models\Entities;

class Usuario
{
    public $Id;
    public $Nombre;
    public $Apellido;
    public $Passwordd;
    public $Telefono;
    public $Email;
    public $RolId;

    public function setRolId ($rolId):void{
        $this->RolId  = $rolId;
    }
}

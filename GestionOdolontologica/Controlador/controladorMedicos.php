<?php

class Controladormedico {
    
    public function registrar($identificacion, $nombre, $apellido, $fechaNacimiento, $sexo, $estado, $tipoPersona)
    {
        $gestor = new Gestorpersona();
        $medico = new Persona($identificacion, $nombre, $apellido, $fechaNacimiento, $sexo, $estado, $tipoPersona);
        $gestor->registrar($medico);
        
    }

    public function consultar(Type $var = null)
    {
        # code...
    }

    public function editar(Type $var = null)
    {
        # code...
    }
}








?>
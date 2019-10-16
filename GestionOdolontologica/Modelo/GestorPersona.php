<?php

class Gestorpersona{
    
    public function registrar(Persona $medico)
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $ide = $medico->identificacion();
        $nombre = $medico->nombre();
        $apellido = $medico->apellido();
        $fecha = $medico->fechaNacimiento();
        $sexo = $medico->sexo();
        $estado = $medico->estado();
        $tipo = $medico->tipoPersona();
        $sql = "INSERT INTO persona (PerIdentificacion, PerNombre, PerApellido, PerFechaNacimiento, PerSexo, PerEstado, PerTipoPersona)"
                . " VALUES ('$ide','$nombre','$apellido','$fecha','$sexo','$estado','$tipo')";
        $conexion->consulta($sql);
        $conexion->cerrar();
    }
}










?>
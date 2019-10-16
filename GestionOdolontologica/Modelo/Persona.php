<?php

class Persona{
    
    private $PerIdentificacion;
    private $PerNombre;
    private $PerApellido;
    private $PerFechaNacimiento;
    private $PerSexo;
    private $PerEstado;
    private $PerTipoPersona;

    public function __construct ($identificacion, $nombre, $apellido, $fechaNacimiento, $sexo, $estado, $tipoPersona)
    {
        $this->PerIdentificacion = $identificacion;
        $this->PerNombre = $nombre;
        $this->PerApellido = $apellido;
        $this->PerFechaNacimiento = $fechaNacimiento;
        $this->PerSexo = $sexo;
        $this->PerEstado = $estado;
        $this->PerTipoPersona = $tipoPersona;
    }
    public function identificacion()
    {
        return $this->PerIdentificacion;
    }
    public function nombre()
    {
        return $this->PerNombre;
    }
    public function apellido()
    {
        return $this->PerApellido;
    }
    public function fechaNacimiento()
    {
        return $this->PerFechaNacimiento;
    }
    public function sexo()
    {
        return $this->PerSexo;
    }
    public function estado()
    {
        return $this->PerEstado;
    }
    public function tipoPersona()
    {
        return $this->PerTipoPersona;
    }
}





?>
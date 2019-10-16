<?php
    require_once 'Controlador/controlador.php';
    require_once 'Controlador/controladorMedicos.php';
    require_once 'Modelo/GestorCita.php';
    require_once 'Modelo/Cita.php';
    require_once 'Modelo/Paciente.php';
    require_once 'Modelo/Conexion.php';
    require_once 'Modelo/Persona.php';
    require_once 'Modelo/GestorPersona.php';


    $controlador = new Controlador();
    $controlador1 = new Controladormedico();

    if( isset($_GET["accion"])){

        //Modulo citas
        if($_GET["accion"] == "asignar"){
            $controlador->cargarAsignar();
        }
        if($_GET["accion"] == "guardarCita"){
            $controlador->agregarCita($_POST["asignarDocumento"],
            $_POST["medico"], $_POST["fecha"], $_POST["hora"],
            $_POST["consultorio"]);
        }
        if ($_GET["accion"] == "consultarCita") {
            $controlador->consultarCitas($_GET["consultarDocumento"]);
        }
        if($_GET["accion"] == "consultar"){
        $controlador->verPagina('Vista/html/consultar.php');
        }
        if($_GET["accion"] == "cancelar"){
        $controlador->verPagina('Vista/html/cancelar.php');
        }
        if ($_GET["accion"] == "cancelarCita"){
            $controlador->cancelarCitas($_GET["cancelarDocumento"]);
        }
        if($_GET["accion"] == "consultarPaciente"){
            $controlador->consultarPaciente($_GET["documento"]);
        }
        if($_GET["accion"] == "ingresarPaciente"){
            $controlador->agregarPaciente(
            $_GET["PacDocumento"],
            $_GET["PacNombres"],
            $_GET["PacApellidos"],
            $_GET["PacNacimiento"],
            $_GET["PacSexo"]
            );
        }
        if($_GET["accion"] == "consultarHora"){
            $controlador->consultarHorasDisponibles($_GET["medico"], $_GET["fecha"]);
        }
        if($_GET["accion"] == "verCita"){
            $controlador->verCita($_GET["numero"]);
        }
        if($_GET["accion"] == "confirmarCancelar"){
            $controlador->confirmarCancelarCita($_GET["numero"]);
        }


        //Módulo medicos

        if ($_GET["accion"]=="medicos") {
            $controlador->verpagina('Vista/html/modulo_medicos.php');
        }

        if ($_GET["accion"]=="registrarM") {
            $controlador->verpagina('Vista/html/registrar_medicos.php');
        }

        if ($_GET["accion"]=="registrar_medico") {
            $controlador1->registrar($_POST["identificacion"], $_POST["nombre"], $_POST["apellido"], $_POST["fecha"], $_POST["sexo"], "Habilitado", 2);
        }

        if ($_GET["accion"]=="consultar_medico") {
            $controlador1->consultar();
        }

        if ($_GET["accion"]=="editar_medico") {
            $controlador1->editar();
        }
    }
    else {
    $controlador->verPagina('Vista/html/inicio.php');
    }
?>

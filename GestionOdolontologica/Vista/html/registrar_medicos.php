<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Gestión Odontológica</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
                <h1>Módulo Médicos</h1>
            </div>
            <ul id="menu">
                <li><a href="index.php?accion=registrarM">Registrar Médico</a> </li>
                <li><a href="index.php?accion=consultarM">Consultar Médico</a> </li>
                <li><a href="index.php?accion=editarM">Editar Médico</a> </li>
            </ul>
            <div id="contenido">
               <form action="index.php?accion=registrar_medico" method="post">
                   <label>Número de identificación</label><br>
                   <input type="number" id="identificacion" name="identificacion"><br>
                   <label>Nombre</label><br>
                   <input type="text" id="nombre" name="nombre"><br>
                   <label>Apellido</label><br>
                   <input type="text" id="apellido" name="apellido"><br>
                   <label>Fecha de Nacimiento</label><br>
                   <input type="date" name="fecha" id="fecha"><br>
                   <label>Sexo</label><br>
                   <select id="sexo" name="sexo">
                        <option value="-1" selected="selected">--Selecione el sexo ---</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select><br><br>
                    <button type="submit">Registrar médico</button>
               </form>
            </div>
        </div>
    </body>
</html>
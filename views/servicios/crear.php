<?php 
include_once __DIR__ . '/../templates/barra.php'; 
include_once __DIR__ . '/../templates/alertas.php';
?>

<h1 class="nombre-pagina ">Crear Servicios</h1>
<p class="descripcion-pagina" >Añade un Nuevo Servicio</p>

<form action="/servicios/crear" method="POST" class="formulario">

    <?php include_once __DIR__ . '/formulario.php'; ?>

    <input type="submit" class="boton" value="Guardar Servicio">
</form>
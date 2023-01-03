<?php
 include_once __DIR__ . '/../templates/barra.php';
include_once __DIR__ . '/../templates/alertas.php';

?>
<hr>

<h1 class="nombre-pagina">Nuevo Servicio</h1>

<p class="descripcion-pagina">Crear nuevo Servicio</p>




<form action="/servicios/crear" method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>

    <input type="submit" class="boton" value="Guardar">

</form>
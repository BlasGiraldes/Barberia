<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Ingrese su correo</p>

<?php include_once __DIR__ . "/../templates/alertas.php"
?>
<form action="/olvide" method="POST" class="fomulario">
    <div class="campo">
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
     <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>
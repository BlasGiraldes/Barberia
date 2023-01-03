<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca tu nueva contraseña a continuación:</p>

<?php include_once __DIR__ . "/../templates/alertas.php"
?>

<php if($error) return;?>
<form method="POST" class="formulario">

<div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu Contraseña nueva"
            name="password"
        />
    </div>
    <input type="submit" value="Actualizar" class="boton">

</form>


<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
    <a href="/">Crear Cuenta</a>

</div>
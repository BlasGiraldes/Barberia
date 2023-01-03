<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesión con tus datos</p>

<?php include_once __DIR__ . "/../templates/alertas.php"
?>


<form action="/" class="formulario" method="POST">

    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            placeholder="Tu Correo"
            name="email"
        />
    </div>

        <div class="campo">
            <label for="password">Password</label>

            <input 
                type="password"
                id="password"
                placeholder="Tu Password"
                name="password"
            />
        </div>

        <input type="submit" class="boton" value="Iniciar Sesión">








</form>


<div class="acciones">
     <a href="/crear-cuenta" class=""> ¿Aún no tenés una cuenta? Crear una</a>
    <a href="/olvide" class="">¿Olvidaste tu contraseña?</a>
</div>
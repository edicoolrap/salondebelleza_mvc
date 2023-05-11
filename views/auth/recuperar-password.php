<h1 class="nombre-pagina" >Recuperar Password</h1>
<p class="descripcion-pagina"  > Coloca tu nuevo password a continuacion</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<?php if($error) return; ?>
<form method="POST" class="formulario">

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Nuevo Password">
    </div>

    <input type="submit" class="boton" value="Guardar Password">

</form>

<div class="acciones" >
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea Una</a>
</div>
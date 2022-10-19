<h1 class="nombre-pagina">Olvide password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuacion</p>

<?php 

    include_once __DIR__ . "/../templates/alertas.php";

?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email">
    </div>

    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">Ya tienes una cuenta? Inicia Sesion</a>
    <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crea una</a>
</div>
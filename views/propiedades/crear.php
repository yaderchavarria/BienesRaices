<main class="contenedor seccion">
        <h1>Crear</h1>

<a class="boton boton-verde" href="/admin">Volver</a>

<?php foreach($errores as $error):    ?>

<div class="alerta error">
    <?php echo $error; ?>
</div>

<?php endforeach; ?>        

<form class="formulario" action="" method="POST" enctype="multipart/form-data">

<?php include __DIR__ . '/formulario.php'; ?>

<input type="submit" value="crear propiedad" class="boton boton-verde">

</form>


</main>
<main class="contenedor seccion">
        <h1>Crear Vendedor(a)</h1>

        <a class="boton boton-verde" href="/admin">Volver</a>

        <?php foreach($errores as $error):    ?>

        <div class="alerta error">
            <?php echo $error; ?>
        </div>

        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/vendedores/crear">

        <?php include 'formulario.php' ?>

            <input type="submit" value="Crear Vendedor(a)" class="boton boton-verde">

        

        </form>
    </main>
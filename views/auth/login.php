<main class="contenedor seccion contenido-centrado formulario-login ">
        <h1>Iniciar Sesión</h1>

        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>

        <?php endforeach ?>       

    <form method="POST" class="formulario" action="/login"  >

    <fieldset>
            
                
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu email">

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Tu password">
                
        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
    </form>

    </main>
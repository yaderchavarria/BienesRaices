<main class="contenedor seccion">
        <h1>Contacto</h1>

        <?php
        
        if ($mensaje) { ?>
            <p class="alerta exito">  <?php echo $mensaje; ?> </p>;
       <?php } ?>

        <picture>
            <source srcset="/build/img/destacada3.webp" type="image/webp">
            <source srcset="/build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="/build/img/destacada3.jpg" alt="imagen contacto">
        </picture>

        <h2>Llene el formulario de contacto</h2>
        <form class="formulario" action="/contacto" method="POST">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu nombre" name="contacto[nombre]" >
                
                
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" cols="30" rows="10" name="contacto[mensaje]" ></textarea>
            </fieldset>
            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <label for="opciones">Vende o Compra:</label>
                <select id="opciones" name="contacto[tipo]" >
                    <option value="" disabled selected>--Selecione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>
                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto" name="contacto[precio]" >
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto[contacto]" value="telefono" type="radio" name="" id="contactar-telefono"  >
                    <label for="contactar-email">Email</label>
                    <input name="contacto[contacto]" value="email" type="radio" name="" id="contactar-email" >
                </div>

                <div id="contacto"></div>
                
            </fieldset>

            

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
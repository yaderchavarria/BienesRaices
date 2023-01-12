<fieldset>
            <legend>Información General</legend>

            <label for="titulo">Título</label>
            <input type="text" name="propiedad[titulo]" id="titulo" placeholder="Título propiedad" value="<?php echo p($propiedad->titulo); ?>">

            <label for="precio">Precio</label>
            <input type="number" name="propiedad[precio]" id="precio" placeholder="Precio de la propiedad" value="<?php echo p($propiedad->precio); ?>">

            <label for="imagen">Imagen</label>
            <input type="file" name="propiedad[imagen]" id="imagen" accept="image/jpeg, image/png">

            <?php if ($propiedad->imagen) { ?>
                <img src="/imagenes/<?php echo $propiedad->imagen ?>" alt="" class="imagen-small"  >
            <?php } ?>

            <label for="descripcion">Descripción</label>
            <textarea name="propiedad[descripcion]" id="descripcion"><?php echo p($propiedad->descripcion); ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" name="propiedad[habitaciones]" id="imagen" placeholder="Ej:3" min="1" max="9" value="<?php echo p($propiedad->habitaciones); ?>">

            <label for="wc">Baños</label>
            <input type="number" name="propiedad[wc]" id="wc" placeholder="Ej:3" min="1" max="9" value="<?php echo p($propiedad->wc); ?>">

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" name="propiedad[estacionamiento]" id="estacionamiento" placeholder="Ej:3" min="1" max="9" value="<?php echo p($propiedad->estacionamiento); ?>">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <label for="vendedor">Vendedor</label>
            <select name="propiedad[vendedores_id]" id="vendedor">
            <option selected  value="">--Seleccione--</option>
            
                <?php foreach ($vendedores as $vendedor ) {?>
                    
                    <option <?php echo $propiedad->vendedorId === $vendedor->id ? 'selected' : ''; ?> value="<?php echo p($vendedor->id); ?>"><?php echo p($vendedor->nombre) . " " . p($vendedor->apellido); ?></option>
                <?php }?>
            </select>
            
        </fieldset>
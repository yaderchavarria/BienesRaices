<fieldset>
            <legend>Información General</legend>

            <label for="nombre">Nombre</label>
            <input type="text" name="vendedor[nombre]" id="nombre" placeholder="Nombre del Vendedor(a)" 
            value="<?php echo p($vendedor->nombre); ?>">
            <label for="apellido">Apellidos</label>
            <input type="text" name="vendedor[apellido]" id="apellido" placeholder="Apellido del Vendedor(a)" 
            value="<?php echo p($vendedor->apellido); ?>">
</fieldset>

<fieldset>
            <legend>Información Adicional</legend>

            <label for="telefono">Teléfono</label>
            <input type="number" name="vendedor[telefono]" id="telefono" placeholder="Telefono del Vendedor(a)" 
            value="<?php echo p($vendedor->telefono); ?>">


            
</fieldset>
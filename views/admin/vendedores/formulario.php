
    <fieldset>
        <legend>Informacion del vendedor</legend>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php  echo $seller->nombre ?>">

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" value="<?php echo $seller->apellido ?>">

        <label for="tel">Telefono</label>
        <input type="tel" name="telefono" id="tel" value="<?php echo $seller->telefono ?>">
    </fieldset>

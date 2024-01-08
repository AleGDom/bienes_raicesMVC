
    <fieldset>
        <legend>Informacion General de la Propiedad</legend>
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" placeholder="Titulo de la propiedad" value="<?php echo $property->titulo ?>" >

        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad" value="<?php echo $property->precio ?>">

        <label for="imagen">Imagen de la propiedad</label>
        <input type="file" name="imagen" id="imagen" accept="image/jpeg">
        <?php if($property->imagen && file_exists(DIR_IMAGES.$property->imagen)): ?>
            <img src="/imagenes/<?php echo $property->imagen ?>" alt="imagen de la propiedad" class="image-update">
        <?php endif ?>

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $property->descripcion ?></textarea>
    </fieldset>
    <fieldset>
        <legend>Informacion de la propiedad</legend>

        <label for="habitaciones">Habitaciones</label>
        <input type="number" name="habitaciones" id="habitaciones" placeholder="Cantidad de habitaciones" value="<?php echo $property->habitaciones ?>">

        <label for="wc">WC</label>
        <input type="number" name="wc" id="wc" placeholder="Cantidad de WC" value="<?php echo $property->wc ?>">

        <label for="estacionamiento">Estacionamientos</label>
        <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Cantidad de Estacionamientos" value="<?php echo $property->estacionamiento ?>">
    </fieldset>
    <fieldset>
        <legend>Vendedor</legend>
        <select name="vendedores_id" id="vendedores_id">
            <option value="" disabled selected >--Sleccionar--</option>
            <?php  foreach($sellers as $seller): ?>
                <option value="<?php echo $seller->id ?>" <?php echo $property->vendedores_id==$seller->id ? 'selected' : ''; ?> > <?php echo $seller->nombre." ". $seller->apellido ?></option>
                
            <?php  endforeach; ?>
        </select>
            
    </fieldset>
    

<form class="form" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Informacion General de la Propiedad</legend>
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" placeholder="Titulo de la propiedad">

        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad">

        <label for="imagen">Imagen de la propiedad</label>
        <input type="file" name="imagen" id="imagen" accept="image/jpeg">

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
    </fieldset>
    <fieldset>
        <legend>Informacion de la propiedad</legend>

        <label for="habitaciones">Habitaciones</label>
        <input type="number" name="habitaciones" id="habitaciones" placeholder="Cantidad de habitaciones">

        <label for="wc">WC</label>
        <input type="number" name="wc" id="wc" placeholder="Cantidad de WC">

        <label for="estacionamiento">Estacionamientos</label>
        <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Cantidad de Estacionamientos">
    </fieldset>
    <fieldset>
        <legend>Vendedor</legend>
        <select name="vendedores_id" id="vendedores_id">
            <option value="" disabled selected >--Sleccionar--</option>
            <option value="1">Alexis Dominguez</option>
            <option value="2">Andrea Ortega</option>
        </select>
    </fieldset>
    <input type="submit" value="Crear Propiedad" class="boton-verde">
</form>
<main class="contenedor seccion">
    <h2>Contacto</h2>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" >
        <img src="build/img/destacada3.jpg" alt="contacto">
    </picture>
    <h3>Rellena el formulario</h3>
    <form class="form">
        <fieldset>
            <legend>Informacion personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre">

            <label for="email">Correo</label>
            <input type="email" name="email" id="email" placeholder="Escribe tu correo">

            <label for="tel">Telefono</label>
            <input type="tel" name="tel" id="tel" placeholder="Escribe tu telefono">

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion de la propiedad</legend>
            <label for="opt">Vende o Compra</label>
            <select name="opt" id="opt" >
                <option value="" selected disabled>--Selecciona--</option>
                <option value="vende">Vende</option>
                <option value="compra">Compra</option>
            </select>
            <label for="precio">Precio o Presupuesto</label>
            <input type="number" name="precio" id="precio" min="1" placeholder="Precio de la propiedad">
        </fieldset>
        <fieldset>
            <legend>Informacion del contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="opt-contact">
                <label for="contact-tel">Telefono</label>
                <input type="radio" name="contact-opt" id="contact-tel" value="telefono">
                <label for="contact-email">Correo</label>
                <input type="radio" name="contact-opt" id="contact-email" value="email">
            </div>
            <p>Si eligio Telefono elija fecha y hora</p>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha">
            <label for="hora">Hora</label>
            <input type="time" name="hora" id="hora">
        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>
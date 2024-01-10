<div class="properties">
<?php foreach ($properties as $property):?>
    
        <div class="property">
            <picture>
                <source srcset="/imagenes/<?php echo $property->imagen ?>" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="Propiedad">
            </picture>
            <div class="property-content">
                <h3><?php echo $property->titulo ?></h3>
                <p><?php echo $property->descripcion ?></p>
                <p class="precio"><?php echo $property->precio ?></p>
                
                <ul class="property-char">
                    <li>
                        <img src="build/img/icono_wc.svg" alt="WC-icon">
                        <p><?php echo $property->wc ?></p>
                    </li>
                    <li>
                        <img src="build/img/icono_dormitorio.svg" alt="WC-icon">
                        <p><?php echo $property->habitaciones ?></p>
                    </li>
                    <li>
                        <img src="build/img/icono_estacionamiento.svg" alt="WC-icon">
                        <p><?php echo $property->estacionamiento ?></p>
                    </li>
                </ul>
                <a href="#" class="boton-amarillo-block">Ver propiedad</a>
            </div>
            </div>
       
<?php endforeach ?>

</div>
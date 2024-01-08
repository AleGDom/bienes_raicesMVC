<main class="seccion contenedor">
    <h1>Administrador de Bienes Raices</h1>
    <a href="/propiedad/crear" class="boton-verde">Crear Propiedad</a>
    <a href="/vendedor/crear" class="boton-aqua">Crear Vendedor</a>

    <h2>Propiedades</h2>
    <table class="table-admin">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>img</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach ($properties as $property): ?>
            <tr>
                <td><?php echo $property->id ?></td>
                <td><?php echo $property->titulo ?></td>
                <td><img src="/imagenes/<?php echo $property->imagen ?>" alt=""></td>
                <td><?php echo $property->precio ?></td>
                <td>
                    <a href="/propiedad/actualizar?id=<?php echo $property->id ?>" class="boton-amarillo-block">Actualizar</a>
                    <form action="/propiedad/eliminar" method="POST">
                        <input type="hidden" name="id" value="<?php echo $property->id ?>">
                        <input type="submit" value="Eliminar" class="boton-rojo-block">
                    </form>
                </td>              
            </tr>
           <?php endforeach; ?>    
        </tbody>
    </table>

    <h2>Vendedores</h2>

    <table class="table-admin sellers">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($sellers as $seller): ?>
            <tr>
                <td><?php echo $seller->id ?></td>
                <td><?php echo $seller->nombre ?></td>
                <td><?php echo $seller->apellido ?></td>
                <td><?php echo $seller->telefono ?></td>
                <td>
                    <a href="/vendedor/actualizar?id=<?php echo $seller->id ?>" class="boton-amarillo-block">Actualizar</a>
                    <form action="/vendedor/eliminar" method="POST">
                        <input type="hidden" name="id" value="<?php echo $seller->id ?>">
                        <input type="submit" value="Eliminar" class="boton-rojo-block">
                    </form>
                    <!-- <a href="#" class="boton-rojo-block">Eliminar</a> -->
                </td>              
            </tr>
           <?php endforeach; ?>    
        </tbody>
    </table>   
    
</main>
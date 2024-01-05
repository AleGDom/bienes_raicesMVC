<main class="seccion contenedor">
    <h2>Crear</h2>
    <a href="/admin" class="boton-verde">Volver</a>

    <?php foreach ($errores as $error): ?>
        <div class="alert error"> <?php echo $error ?> </div>
    <?php endforeach; ?>
    <?php include 'formulario.php'; ?>
</main>
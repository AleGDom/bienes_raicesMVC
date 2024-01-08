<main class="contenedor seccion">
    <h1>Crear Vendedor</h1>
    <a href="/admin" class="boton-aqua">Volver</a>
    <?php foreach ($errores as $error): ?>
        <div class="alert error"> <?php echo $error ?> </div>
    <?php endforeach; ?>
    <form method="post" class="form">
        <?php include 'formulario.php'; ?>

        <input type="submit" value="Crear Vendedor" class="boton-aqua">
    </form>
</main>
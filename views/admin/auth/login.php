<main class="seccion contenedor contenido-centrado">
    <h1>Login</h1>
    <?php foreach ($errores as $error): ?>
        <div class="alert error"> <?php echo $error ?> </div>
    <?php endforeach; ?>
    <form class="form" method="POST"> 
        <fieldset>
            <legend>Iniciar Sesion</legend>

            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </fieldset>
        <input type="submit" value="Iniciar sesion" class="boton-verde">
    </form>
</main>
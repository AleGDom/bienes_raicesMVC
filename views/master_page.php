<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="build/css/app.css" as="style">
    <link rel="stylesheet" href="build/css/app.css">
    <title>Bienes Raices</title>
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' :'';?>">
        <div class="content-header contenedor">
            <div class="bar">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Logo-bienes-raices">
                </a>
                <div class="bar-right">
                    <div class="bar-icons">
                        <img src="build/img/barras.svg" alt="" class="barras-btn">
                        <img src="build/img/dark-mode.svg" alt="" class="darkmode-btn">
                    </div>
                    
                    <nav class="navegator">
                        <a href="nosotros">Nosotros</a>
                        <a href="anuncios">Anuncios</a>
                        <a href="blog">Blog</a>
                        <a href="contacto">Contacto</a>
                    </nav>
                </div>  
            </div>
            <?php  
            if($inicio){
                echo "<h1>Venta de Casas y Departamentos Exclusivos De Lujo</h1>";
            }
            ?>
        </div>
    </header>

    <?php echo $contenido ?>

    <footer class="footer">
    <div class="seccion contenedor">
        <nav class="navegator">
            <a href="#">Nosotros</a>
            <a href="#">Anuncios</a>
            <a href="#">Blog</a>
            <a href="#">Contacto</a>
        </nav>
        <p>Todos los derechos reservados 2024 ©</p>
    </div>
</footer>
</body>
<script src="build/js/bundle.min.js"></script>
</html>


<?php 

    require '/Users/alexi/Desktop/bienesraices_inicio/vendor/autoload.php';
    require '/Users/alexi/Desktop/bienesraices_inicio/includes/functions.php';
    require '/Users/alexi/Desktop/bienesraices_inicio/includes/config/database.php';
    
    use Model\ActiveRecord;

    ActiveRecord::$db=conectarDB();
?>
<?php
    $ver = '?0.014';

    $archivo_actual = 'inicio';
    if(isset($_GET['page'])){
        $archivo_actual = $_GET['page'];
    }

    include 'header-scripts.php';
    if( $archivo_actual !== 'iniciar-sesion' && $archivo_actual !== 'registrarse' && $archivo_actual !== 'recuperar-contrasena' ){
        include 'header.php';
    }
    
    if( $archivo_actual && file_exists( $archivo_actual . '.php' ) ){
        require_once(basename(($archivo_actual!='' ? $archivo_actual : 'inicio') . '.php'));
    }

    if( $archivo_actual !== 'iniciar-sesion' && $archivo_actual !== 'registrarse' && $archivo_actual !== 'recuperar-contrasena' ){
        include 'footer.php';
    }
    include 'footer-scripts.php';
?>

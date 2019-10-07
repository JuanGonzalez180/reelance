<?php
    $ver = '?0.016';
    session_start();

    $archivo_actual = 'inicio';
    if(isset($_GET['page'])){
        $archivo_actual = $_GET['page'];
    }

    include 'header-scripts.php';
    if( $archivo_actual !== 'iniciar-sesion' && $archivo_actual !== 'registrarse' && $archivo_actual !== 'recuperar-contrasena' ){
        include 'header.php';
    }
    
    if( $archivo_actual && file_exists( $archivo_actual . '.php' ) ){
        if( 
            $archivo_actual !== 'mi-cuenta-escritorio' &&
            $archivo_actual !== 'mi-cuenta-pedidos'
        ){
            require_once(basename(($archivo_actual!='' ? $archivo_actual : 'inicio') . '.php'));
        }else{
            require_once(basename('mi-cuenta.php'));
        }
    }

    if( $archivo_actual !== 'iniciar-sesion' && $archivo_actual !== 'registrarse' && $archivo_actual !== 'recuperar-contrasena' ){
        include 'footer.php';
    }
    include 'footer-scripts.php';
?>

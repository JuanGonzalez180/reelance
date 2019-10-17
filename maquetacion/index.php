<?php
    $ver = '?0.025';
    session_start();
    
    if(!isset($_SESSION['font']) ){
        $_SESSION['font'] = '';
    }

    if(!isset($_SESSION['color'])){
        $_SESSION['color'] = '';
    }

    if(!isset($_SESSION['border'])){
        $_SESSION['border'] = '';
    }

    $archivo_actual = 'inicio';
    if(isset($_GET['page'])){
        $archivo_actual = $_GET['page'];
    }

    $bodyAdd = '';
    if( $archivo_actual == 'iniciar-sesion' || 
        $archivo_actual == 'registrarse' || 
        $archivo_actual == 'recuperar-contrasena' ||
        $archivo_actual == 'blog' ||
        $archivo_actual == 'blog-detalle'
    ){
        $bodyAdd = "bkg-ree-two";
    }

    include 'header-scripts.php';
    if( $archivo_actual !== 'iniciar-sesion' && 
        $archivo_actual !== 'registrarse' && 
        $archivo_actual !== 'recuperar-contrasena' &&
        $archivo_actual !== 'finalizar-compra'
    ){
        include 'header.php';
    }

    
    if( $archivo_actual && file_exists( $archivo_actual . '.php' ) ){
        if( 
            $archivo_actual !== 'mi-cuenta-escritorio' &&
            $archivo_actual !== 'mi-cuenta-pedidos' && 
            $archivo_actual !== 'mi-cuenta-pedido-detalle' &&
            $archivo_actual !== 'mi-cuenta-envio' &&
            $archivo_actual !== 'mi-cuenta-facturacion' &&
            $archivo_actual !== 'mi-cuenta-editar'
        ){
            require_once(basename(($archivo_actual!='' ? $archivo_actual : 'inicio') . '.php'));
        }else{
            require_once(basename('mi-cuenta.php'));
        }
    }

    if( $archivo_actual !== 'iniciar-sesion' && 
        $archivo_actual !== 'registrarse' && 
        $archivo_actual !== 'recuperar-contrasena' &&
        $archivo_actual !== 'finalizar-compra'
    ){
        include 'footer.php';
    }
    include 'footer-scripts.php';
?>

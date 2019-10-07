<?php
    $ver = '?0.014';
    session_start();

    if( isset($_POST['font']) ){
        if( in_array( $_POST['font'], array("helvetica", "arial", "open-sans", "museo-sans", "lato")) ){
            $_SESSION['font'] = $_POST['font'];
        }
    }

    if( isset($_POST['color']) ){
        if( in_array( $_POST['color'], array("color1", "color2")) ){
            $_SESSION['color'] = $_POST['color'];
        }
    }

    if( isset($_POST['border']) ){
        if( in_array( $_POST['border'], array("bordes", "sin-bordes")) ){
            $_SESSION['border'] = $_POST['border'];
        }
    }

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

<?php
    $ver = '?0.01';

    $archivo_actual = 'inicio';
    if(isset($_GET['page'])){
        $archivo_actual = $_GET['page'];
    }

    include 'header.php';
    if( $archivo_actual && file_exists( $archivo_actual . '.php' ) ){
        require_once(basename(($archivo_actual!='' ? $archivo_actual : 'inicio') . '.php'));
    }
    include 'footer.php';
?>
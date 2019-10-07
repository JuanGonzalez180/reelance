<?php
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

    echo json_encode('hola');
?>
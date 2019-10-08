<!DOCTYPE html>
    <html>
        <head>
            <title>Home</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
            <!--meta info-->
            <link rel="shortcut icon" href="images/assets/favicon.png">

            <!--stylesheet include-->
            <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
            <meta content="Default Description" name="description">
            <meta content="" name="keywords">
            <meta content="INDEX,FOLLOW" name="robots">
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>

            <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="dist/mobiscroll/css/mobiscroll.jquery.min.css">

            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
            
            <link href="css/iconos/style.css<?php print $ver; ?>" media="all" type="text/css" rel="stylesheet"/>
            <link href="css/styles.css<?php print $ver; ?>" media="all" type="text/css" rel="stylesheet"/>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,600,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
            <link href='https://fonts.googleapis.com/css?family=Lato:400,600,700' rel='stylesheet' type='text/css'>
            <link href="fonts/BebasNeue/styles.css" media="all" type="text/css" rel="stylesheet"/>
            <link href="fonts/HelveticaNeue-Thin/styles.css" media="all" type="text/css" rel="stylesheet"/>
            <link href="fonts/Museo-Sans/styles.css" media="all" type="text/css" rel="stylesheet"/>
            
            <!-- Juan -->
            <link href="css/style_1.css<?php print $ver; ?>" media="all" type="text/css" rel="stylesheet"/>
            <!-- Omar -->
            <link href="css/style_2.css<?php print $ver; ?>" media="all" type="text/css" rel="stylesheet"/>
            <link href="css/colores-two.css<?php print $ver; ?>" media="all" type="text/css" rel="stylesheet"/>
            <link href="css/colores-omar.css<?php print $ver; ?>" media="all" type="text/css" rel="stylesheet"/>

            <!--stylesheet include-->
            <!-- <link rel="stylesheet" type="text/css" media="all" href="ant/css/settings.css"> -->
            <!-- <link rel="stylesheet" type="text/css" media="all" href="ant/css/style.css"> -->
            <!-- <link href="js/custom.css" rel="stylesheet"> -->
            <!-- Owl Carousel Assets -->
            <!-- <link href="ant/js/owl.carousel.css" rel="stylesheet"> -->
            <!-- <link href="ant/js/owl.theme.css" rel="stylesheet"> -->
        </head>
        <body class="<?php print $_SESSION['font']. ' ' . $_SESSION['color']. ' ' . $_SESSION['border']; ?>">
            <div class="float-fixed-fuentes">
                <a class="icono-float" data-toggle="collapse" href="#fuentes" aria-expanded="false" role="button" aria-controls="fuentes">
                    <i class="lni-grid-alt"></i>
                </a>
                <div class="collapse animated fuentes" id="fuentes">
                    <h3>Fuentes</h3>
                    <form id="target-font" action="" method="post">
                        <a class="cambiarFuente" data-font="helvetica">Helvetica Thin</a>
                        <a class="cambiarFuente" data-font="arial">Arial</a>
                        <a class="cambiarFuente" data-font="open-sans">Open Sans Light</a>
                        <a class="cambiarFuente" data-font="work-sans">Work Sans</a>
                        <a class="cambiarFuente" data-font="museo-sans">Museo Sans</a>
                        <a class="cambiarFuente" data-font="lato">Lato</a>
                        <input type="hidden" name="font" id="font"/>
                    </form>
                    <br>
                    <h3>Colores</h3>
                    <form id="target-colores" action="" method="post">
                        <a class="cambiarColor" data-color="color1"> <div style="width:30px; height: 15px; background: #8c8c8c;"></div> </a>
                        <a class="cambiarColor" data-color="color2"> <div style="width:30px; height: 15px; background: #353535;"></div> </a>
                        <input type="hidden" name="color" id="color"/>
                    </form>
                    <br>
                    <h3>Botones Border</h3>
                    <form id="target-border" action="" method="post">
                        <a class="cambiarBorder" data-border="bordes"> Con bordes </a>
                        <a class="cambiarBorder" data-border="sin-bordes"> Sin bordes </a>
                        <input type="hidden" name="border" id="border"/>
                    </form>
                </div>
            </div>

            <div class="page-wrapper">
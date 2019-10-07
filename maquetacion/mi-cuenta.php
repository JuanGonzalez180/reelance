<div class="container">
    <div class="cuenta">
        <h1>Mi Cuenta</h1>
        <div class="row-cuenta">
            <nav class="">
                <ul class="ul-account">
                    <li> <a href="mi-cuenta-escritorio" class="active"> Escritorio </a> </li>
                    <li> <a href=""> Pedidos </a> </li>
                    <li> <a href=""> Dirección de envío </a> </li>
                    <li> <a href=""> Dirección de facturación </a> </li>
                    <li> <a href=""> Editar Cuenta </a> </li>
                    <li> <a href="iniciar-sesion"> Cerrar sesión </a> </li>
                </ul>
            </nav>
            <div class="container-account">
                <?php 
                    if ( $archivo_actual !== 'mi-cuenta' ){
                        include $archivo_actual.'.php';
                    }else{
                        include 'mi-cuenta-escritorio.php';
                    }
                ?>
            </div>
        </div>
    </div>
</div>
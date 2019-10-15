<div class="container">
    <div class="cuenta">
        <h1>Mi Cuenta</h1>
        <div class="row-cuenta">
            <div class="div-nav">
                <ul class="ul-account">
                    <li> <a href="mi-cuenta-escritorio"> Escritorio </a> </li>
                    <li> <a href="mi-cuenta-pedidos" class="active"> Pedidos </a> </li>
                    <li> <a href="mi-cuenta-envio"> Dirección de envío </a> </li>
                    <li> <a href="mi-cuenta-facturacion"> Dirección de facturación </a> </li>
                    <li> <a href="mi-cuenta-editar"> Editar Cuenta </a> </li>
                    <li> <a href="iniciar-sesion"> Cerrar sesión </a> </li>
                </ul>
            </div>
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
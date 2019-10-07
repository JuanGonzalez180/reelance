<div class="header-ree-interna">
    <div class="box-title">
        <h2 class="tit-ree">Finalizar Compra</h2>
    </div>
</div>

<section class="finalizar-compra main-content">
    <div class="product-name">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="acc-finalizar" class="ree-panel"  role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="acc-inicio" data-toggle="collapse" data-parent="#acc-finalizar" href="#acc-inicio1" aria-expanded="false" aria-controls="acc-inicio1">
                                <h5 class="panel-title">
                                    <a>
                                        ¿Ya eres cliente? Haz clic aquí para entrar
                                    </a>
                                    <i class="ree-icon-faq lni-plus"></i>
                                </h5>
                            </div>
                            <div id="acc-inicio1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="acc-inicio">
                                <div class="panel-body">
                                    <!--Empieza Form Login-->
                                    <div mbsc-page class="demo-desktop-single-multi-column">
                                        <form id="formIniciarSesion" mbsc-form class="mbsc-form-box">
                                            <div class="mbsc-grid mbsc-grid-fixed">
                                                <div class="mbsc-form-group">
                                                    <div class="mbsc-row mbsc-justify-content-center">
                                                        <div class="mbsc-col-md-7 mbsc-col-xl-5 mbsc-form-grid">
                                                            <div class="">Si has comprado antes con nosotros, por favor escribe tu nombre de usuario y contraseña en los campos siguientes. Si eres un nuevo cliente, por favor continúa a la sección de facturación y envío.</div>
                                                            <div class="mbsc-row">
                                                                <div class="mbsc-col-12">
                                                                    <div>
                                                                        <label for="email">Usuario o Email</label>
                                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="email" type="text" placeholder="" />
                                                                    </div>
                                                                </div>
                                                                <div class="mbsc-col-12">
                                                                    <div>
                                                                        <label for="pass">Contraseña</label>
                                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="pass" type="password" placeholder="" data-password-toggle="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="mbsc-col-12">
                                                                    <div>
                                                                        <label>
                                                                            Recordarme
                                                                            <input mbsc-checkbox id="recordarme" type="checkbox" />
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <button mbsc-button  type="button" class="ree-iniciarsesion">Iniciar Sesión</button>
                                                            </div>
                                                            <div class="">
                                                                <div>
                                                                    <a href="recuperar-contrasena" class="btn-page no-arrow">Recuperar su contraseña en Reelance</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--Termina Form Login-->
                                </div>
                            </div>

                            <div class="panel-heading" role="tab" id="acc-cupon" data-toggle="collapse" data-parent="#acc-finalizar" href="#acc-cupon1" aria-expanded="false" aria-controls="acc-cupon1">
                                <h5 class="panel-title">
                                    <a>
                                        ¿Tienes un cupón? Clic aquí para introducir tu código
                                    </a>
                                    <i class="ree-icon-faq lni-plus"></i>
                                </h5>
                            </div>
                            <div id="acc-cupon1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="acc-cupon">
                                <div class="panel-body">
                                    <div class="product-code acc-code">
                                        <div class="product-dis">
                                            <h3><span class="the-after">Código de descuento</span></h3>
                                            <p>Ingrese su código de cupón solo una vez.</p>
                                            <form class="form-inline">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"  placeholder="">
                                                </div>										 
                                                <a href="#" class="btn-cart-page">Aplicar cupón</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <form id="formFinalizarCompra" mbsc-form class="mbsc-form-box">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <h3>Dirección Principal</h3>
                        </div>
                        <div mbsc-page class="demo-desktop-single-multi-column">
                            <div class="mbsc-grid mbsc-grid-fixed">
                                <div class="mbsc-form-group">
                                    <div class="mbsc-row mbsc-justify-content-center">
                                        <div class="mbsc-col-md-12 mbsc-col-xl-12 mbsc-form-grid">
                                            <div class="mbsc-row">
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <label for="nombres">Nombres</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="nombres" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <label for="apellidos">Apellidos</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="apellidos" type="text" placeholder=""/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mbsc-row">
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <label for="rfc">RFC (opcional)</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="rfc" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <label for="razon-social">Razón social (opcional)</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="razon-social" type="text" placeholder=""/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mbsc-row">
                                                <div class="mbsc-col-12">
                                                    <div>
                                                        <label for="empresa">Empresa (opcional)</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="empresa" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mbsc-row">
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <label for="fin-email">Email</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="fin-email" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <label for="telefono">Teléfono*</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="telefono" type="text" placeholder=""/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mbsc-row">
                                                <div class="col-md-12">
                                                    <h4>País: México</h4>
                                                    <h5>Domicilio*</h5>
                                                </div>
                                                <div class="mbsc-col-12">
                                                    <div>
                                                        <label for="direccion">Calle, Número e Interior</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="direccion" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="mbsc-col-12">
                                                    <div>
                                                        <label for="colonia">Colonia</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="colonia" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5>Ciudad/Población*</h5>
                                                </div>
                                                <div class="mbsc-col-12">
                                                    <div>
                                                        <label for="ciudad">Ciudad/Población</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="ciudad" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mbsc-row">
                                                <div class="col-md-12">
                                                    <h5>Estado/Provincia*</h5>
                                                </div>
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <select mbsc-dropdown id="estado-provincia">
                                                            <option>Seleccione una opción</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <label for="codigo-postal">Código Postal</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="codigo-postal" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mbsc-row">
                                                <div class="col-md-12">
                                                    <h5>Notas</h5>
                                                </div>
                                                <div class="mbsc-col-12 mbsc-notas-pedido">
                                                    <div>
                                                        <label for="notas">Notas sobre tu pedido, ej. notas especiales para el envío.</label>
                                                        <textarea mbsc-textarea data-input-style="box" data-label-style="floating" id="notas" type="text" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Termina-->
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <label class="label-title">
                                <input mbsc-checkbox id="check-crear-cuenta" type="checkbox" />
                                <h3>¿Crear una cuenta?</h3>
                            </label>
                        </div>
                        <div mbsc-page class="demo-desktop-single-multi-column mbsc-account-new">
                            <div class="mbsc-grid mbsc-grid-fixed">
                                <div class="mbsc-form-group">
                                    <div class="mbsc-row mbsc-justify-content-center">
                                        <div class="mbsc-col-md-12 mbsc-col-xl-12 mbsc-form-grid">
                                            <div class="mbsc-row">
                                                <div class="mbsc-col-12">
                                                    <div class="col-md-12">
                                                        <p>Estas creando una cuenta nueva. Si ya tenías una cuenta por favor inicia sesión en la parte superior de la página.</p>
                                                    </div>
                                                    <div>
                                                        <label for="fin-usuario">Nombre de usuario</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="fin-usuario" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="mbsc-col-12">
                                                    <div>
                                                        <label for="fin-pass">Contraseña</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="fin-pass" type="password" placeholder="" data-password-toggle="true" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="label-title">
                                <input mbsc-checkbox id="check-enviar-direccion" type="checkbox" />
                                <h3>¿Enviar a una dirección diferente? </h3>
                            </label>
                        </div>
                        <div mbsc-page class="demo-desktop-single-multi-column mbsc-address-other">
                            <div class="mbsc-grid mbsc-grid-fixed">
                                <div class="mbsc-form-group">
                                    <div class="mbsc-row mbsc-justify-content-center">
                                        <div class="mbsc-col-md-12 mbsc-col-xl-12 mbsc-form-grid">
                                            <div class="mbsc-row">
                                                <div class="col-md-12">
                                                    <h4>País: México</h4>
                                                    <h5>Domicilio*</h5>
                                                </div>
                                                <div class="mbsc-col-12">
                                                    <div>
                                                        <label for="direccion2">Calle, Número e Interior</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="direccion2" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="mbsc-col-12">
                                                    <div>
                                                        <label for="colonia2">Colonia</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="colonia2" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5>Ciudad/Población*</h5>
                                                </div>
                                                <div class="mbsc-col-12">
                                                    <div>
                                                        <label for="ciudad2">Ciudad/Población</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="ciudad2" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mbsc-row">
                                                <div class="col-md-12">
                                                    <h5>Estado/Provincia*</h5>
                                                </div>
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <select mbsc-dropdown id="estado-provincia2">
                                                            <option>Seleccione una opción</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mbsc-col-md-6 mbsc-col-12">
                                                    <div>
                                                        <label for="codigo-postal2">Código Postal</label>
                                                        <input mbsc-input data-input-style="box" data-label-style="floating" id="codigo-postal2" type="text" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Termina-->
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <h3>Tu Pedido</h3>
                                <div class="table-responsive table-cart table-pedido">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>PRODUCTO</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><small>Reelance para Hombre 1 Mes  × 1</small></td>
                                                <td>$600</td>
                                            </tr>
                                            <tr>
                                                <td><small>Reelance para Mujer 1 Mes  × 1</small></td>
                                                <td>$600</td>
                                            </tr>
                                            <tr>
                                                <td><b>SUBTOTAL</b></td>
                                                <td><b>$1200</b></td>
                                            </tr>
                                            <tr>
                                                <td><b>ENVÍO</b></td>
                                                <td><b>Envío gratuito / Solo aplica para México</b></td>
                                            </tr>
                                            <tr>
                                                <td><b>TOTAL</b></td>
                                                <td><b>$1200</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label>
                                <input mbsc-radio type="radio" name="group" /> <span class="mbsc-label">Tarjetas de credito y debito, VISA y MasterCard</span>
                                <span class="mbsc-desc">Pague con tarjeta de crédito de forma segura a través de Banamex. Tres meses sin interes con tu tarjeta Banamex.
                                    <br><img src="https://www.reelance.mx/wuichy/visa.png" alt="Tarjeta de crédito Visa" style="height: 30px;"><img src="https://www.reelance.mx/wuichy/mastercard.png" alt="Tarjeta de crédito MasterCard" style="height: 30px;">
                                </span>
                            </label>
                            <label>
                                <input mbsc-radio type="radio" name="group" /> Pagos en Oxxo, Banamex y Transferencia Interbancaria
                                <span class="mbsc-desc">Realiza tu pago directamente en nuestra cuenta bancaria u Oxxo. Por favor USA EL NUMERO DE PEDIDO como referencia de pago. El pedido no será enviado hasta que el importe completo haya sido recibido en nuestra cuenta.</span>
                            </label>
                            <label>
                                <input mbsc-radio type="radio" name="group" /> Paypal
                                <span class="mbsc-desc">Pagar via PayPal; Puedes pagar con tu tarjeta de crédito si no tienes una cuenta de PayPal.
                                    <br><img src="https://www.reelance.mx/wp-content/themes/salient/img/paypal.png" alt="Indicador de aceptación de PayPal">
                                </span>
                            </label>
                        </div>
                    </div>
                    <hr>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="check-href">
                                <div>
                                    <label>
                                        He leído y acepto los <a href="terminos-y-condiciones" target="_blank">términos y condiciones</a>
                                        <input id="agree" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a mbsc-button href="#" type="button">Realizar el pedido</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
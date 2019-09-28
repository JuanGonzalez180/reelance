<div mbsc-page class="demo-desktop-single-multi-column">
    <form id="formRegistrarse" mbsc-form class="mbsc-form-box">
        <div class="mbsc-grid mbsc-grid-fixed">
            <div class="mbsc-form-group">
                <div class="mbsc-row mbsc-justify-content-center">
                    <div class="mbsc-col-md-7 mbsc-col-xl-5 mbsc-form-grid">
                        <div class="mbsc-form-group-title">Registrarse</div>
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
                            <div class="mbsc-col-12">
                                <div>
                                    <label for="usuario">Usuario</label>
                                    <input mbsc-input data-input-style="box" data-label-style="floating" id="usuario" type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="mbsc-col-12">
                                <div>
                                    <label for="email">Email</label>
                                    <input mbsc-input data-input-style="box" data-label-style="floating" id="email" type="text" placeholder="" />
                                    <span class="mbsc-err-msg">Por favor válida el correo electrónico</span>
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
                                    <label for="pass-rep">Confirmar Contraseña</label>
                                    <input mbsc-input data-input-style="box" data-label-style="floating" id="pass-rep" type="password" placeholder="" data-password-toggle="true" />
                                </div>
                            </div>
                            <div class="mbsc-col-12">
                                <div>
                                    <label>
                                        Aceptar términos y condiciones
                                        <input mbsc-checkbox id="agree" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button mbsc-button type="button" class="ree-registrarse">Enviar</button>
                        </div>
                        <div class="">
                            <div>
                                <a href="iniciar-sesion" class="btn-page no-arrow">Iniciar sesión</a>
                            </div>
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
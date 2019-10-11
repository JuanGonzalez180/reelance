<div mbsc-page class="demo-desktop-single-multi-column forms-usuarios">
    <form id="formIniciarSesion" mbsc-form class="mbsc-form-box">
        <div class="mbsc-grid mbsc-grid-fixed">
            <div class="mbsc-form-group">
                <div class="mbsc-row mbsc-justify-content-center">
                    <div class="mbsc-col-md-7 mbsc-col-xl-5 mbsc-form-grid">
                        
                        <a href="inicio" class="img-inicio">
                            <img src="images/assets/logo-internas.png" alt="">
                        </a>

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
                                        <input mbsc-checkbox id="agree" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center btn-complete">
                            <button mbsc-button  type="button" class="ree-iniciarsesion">Iniciar Sesión</button>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 btn-complete">
                                <button mbsc-button  type="button" class="ree-facebook">
                                    <i class="lni-facebook-original"></i>
                                    Iniciar con Facebook
                                </button>
                            </div>
                        </div>
                        
                        <div class="">
                            <div>
                                <a href="recuperar-contrasena" class="btn-page no-arrow">¿Tienes problemas para inciar sesión?</a>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center btn-complete">
                            <a mbsc-button href="registrarse" type="button" class="ree-btn-two">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
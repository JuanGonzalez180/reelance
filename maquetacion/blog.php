<!--div class="header-ree-interna">
    <div class="box-title">
        <h2 class="tit-ree">Noticias</h2>
    </div>
</div-->

<div class="latest-blog margin-top-0">
    <div class="container">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-8">
            <div class="box-content content-blog">

                <?php foreach ( [0,1,2] as $key => $value) { ?>
                <div class="row">
                    <div class="col-sm-12 item-blog item wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0ms">
                        <div class="bl-fecha">
                            <i class="icre-circular-wall-clock"></i>
                            <div class="">SEPT 15</div>
                        </div>

                        <div class="bl-tag">
                            <i class="icre-tag"></i>
                            <div class="">Guardar</div>
                        </div>

                        <div class="col-sm-12 blog-images">
                            <img src="images/assets/quieres-poblar-cejas.png" alt="">
                        </div>
                        <div class="col-sm-12 blog-content">
                            <div class="extra">
                                <h2 class=""><a href="blog-detalle">¿Quieres poblar tus cejas?</a></h2>
                            </div>
                            <div class="des">
                                Las cejas influyen mucho en la forma que se ve nuestra cara, nos agrega expresión o nos resta dependiendo de cómo las tengamos, tenemos que dar con la forma adecuada ya que también nos podemos ver más jóvenes o de más edad, unas cejas pobladas son la base de un rostro joven, si quieres saber como poblarlas aquí te diremos como:
                            </div>
                            <a href="blog-detalle" class="btn-page">Leer más</a>
                        </div>
                    </div>
                </div>
                <?php }  ?>

            </div>

            <nav aria-label="" class="text-center">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-sm-3">
            <div class="input-group input-search">
                <input type="text" class="form-control" placeholder="Buscar en el blog...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                </span>
            </div>
            <div class="blog-float">
                Flotante<br>
                <img src="images/assets/sp-1.jpg" alt="">
            </div>
        </div>
    </div>
</div>
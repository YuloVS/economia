@extends('layouts.app')

@section('content')

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img src="{{asset('assets/img/3Dsolutions2.png')}}" alt="" width="50" height="50">
            </a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Productos</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Imprimimos tus sueños
                    </h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Lo que imagines, nuestro equipo se encargará de
                        diseñarlo, modelarlo e imprimirlo.
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Descubre mas</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Fabricamos soluciones</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">Contamos con el equipamiento y conocimientos necesarios para poder
                        satisfacer las necesidades de nuestros clientes.</p>
                    <h5 class="text-white-50 mb-4">SATISFACER A NUESTROS CLIENTES ES NUESTRA PRIORIDAD</h5>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Comenzar</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">A su servicio</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Calidad</h3>
                        <p class="text-muted mb-0">Nuestros insumos son de primera calidad, garantizando la robustez de
                            nuestro producto</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Profesionalismo</h3>
                        <p class="text-muted mb-0">Nuestro equipo cuenta con un alto nivel de capacitacion y nos
                            seguimos formando dia a dia.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Online</h3>
                        <p class="text-muted mb-0">Puede realizar sus pedidos online y nosotros nos contactaremos con
                            usted.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Hecho con amor</h3>
                        <p class="text-muted mb-0">Estamos comprometidos en garantizar que todos nuestros clientes
                            queden satisfechos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"><img class="img-fluid"
                            src="{{asset("assets/img/portfolio/thumbnails/1.jpg")}}" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SALUD</div>
                            <div class="project-name">Viseras</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"><img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg"
                            alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SALUD</div>
                            <div class="project-name">Sujeta viseras</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"><img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg"
                            alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SALUD</div>
                            <div class="project-name">Remaches sujeta acetato</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"><img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg"
                            alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">SOLUCIONES</div>
                            <div class="project-name">Ventilador</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"><img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg"
                            alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">UTILIDADES</div>
                            <div class="project-name">Herramientas, tuercas y tornillos</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"><img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg"
                            alt="" />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">NIÑOS</div>
                            <div class="project-name">Juguetes</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action-->
    <section class="page-section bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Visita nuestra tienda en mercadolibre</h2>
            <a class="btn btn-light btn-xl" href="#muestraparaeconomia">Vea nuestro
                productos!</a>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Conozcanos!</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">¿Listo para empezar su primer proyecto con nosotros? Llamenos o envienos
                        un email lo antes posible, su consulta no nos molesta!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>(379) 4123-4567</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a
                        class="d-block" href="mailto:contact@yourwebsite.com">contacto@3DSolutions.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2020 - Fernandez, Pruyas, Vallejos</div>
        </div>
    </footer>
</body>

@endsection
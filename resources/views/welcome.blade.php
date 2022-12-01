<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inicio</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
        crossorigin="anonymous">
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->


        <link href="css/styles.css" rel="stylesheet" />


        <style>
            body{
                background-image: url('img/fondo.png');
                
            },
            h1{
                margin: 10px 10px 10px 10px;
            }
        </style>
    </head>
    <body id="page-top">

        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" >Xeñal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Sobre esta página</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contactanos</a></li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form class="d-flex justify-content mr-2 p-1 mt-1">
                        <a href="{{ route('login') }}" class="form-control btn btn-primary"
                        role="button">Login</a>
                    </form>
                    <form class="d-flex justify-content mr-2 p-1 mt-1">
                        <a href="{{ route('register') }}" class="form-control btn btn-primary"
                        role="button">Register</a>
                    </form>
                </ul>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 >Bienvenido a Xeñal</h1>
                <p class="lead">La pagina que te permite administrar y ubicar tus modulos de red</p>
                <a class="btn btn-lg btn-light" href="#about">Dezlizar hacia abajo!</a>
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Sobre esta página</h2>
                        <p class="lead">Mantente informado y conoce nuevas herramientas de resguardo de informción:</p>
                        <ul>
                            <li>Mapa interactivo con la posibilidad de agregar nuevas ubicaciones </li>
                            <li>Crea y genera inventarios con formularios simples de entender</li>
                            <li>Posibilidades de implementar en otras unidades</li>
                            <li>Descubre una pagina responsiva en la mayoria de elementos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Servicios que ofrecemos</h2>
                        <p class="lead"><b>Creación de paginas, con buen manejo de información.</b></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Contactanos!</h2>
                        <p class="lead"><b>Brayan Emmanuel López Cruz</b></p>
                        <p class="lead"><b>Augusto Jimenez Chimal</b></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Xeñal by Grupo Xcaret</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
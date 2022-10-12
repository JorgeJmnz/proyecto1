<!DOCTYPE html>
                <html lang="en">
                
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>Xeñal</title>
                    <!-- Favicon -->
                    <link href="img/favicon.ico" rel="icon">
                    <!-- Google Web Fonts -->
                    <link rel="preconnect" href="https://fonts.gstatic.com">
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
                    <!-- Font Awesome -->
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
                    <!-- Libraries Stylesheet -->
                    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
                    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
                    <!-- Customized Bootstrap Stylesheet -->
                    <link href="css/style.css" rel="stylesheet">
                    
                    <!-- CSS only -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                </head>
                
                <body>
                    <!-- Navbar Start -->
                    <div class="nav-bar">
                        <nav class="navbar navbar-expand-lg bg-light navbar-light py-5 py-lg-0 pl-3 pl-lg-5" style="z-index: 5;">
                            <a href="" class="navbar-brand">
                                <h2 class="m-0 text-success"><b class="titulo"><span class="text-dark">  XE</span>ÑAL </b></h2>
                            </a>
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                                <div class="nav-item dropdown ml-auto">
                                    <a href="#" class="nav-link dropdown-toggle text-success" data-bs-toggle="dropdown">
                                        <i class="fa fa-wrench me-lg-2"></i>
                                        <span class="d-none d-lg-inline-flex">Filtros de búsqueda</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                        <a class="dropdown-item text-success">
                                            <input list="states" name="states" placeholder="Filtrar por Estados"
                                                class="btn btn-outline-success p-1 ml-1" />
                                            <datalist id="states">
                                                <option value="Aguascalientes">
                                                <option value="Baja California">
                                                <option value="Baja California Sur">
                                                <option value="Campeche">
                                                <option value="Chiapas">
                                                <option value="Chihuahua">
                                                <option value="Ciudad de México">
                                                <option value="Coahuila">
                                                <option value="Colima">
                                                <option value="Durango">
                                                <option value="Estado de México">
                                                <option value="Guanajuato">
                                                <option value="Guerrero">
                                                <option value="Hidalgo">
                                                <option value="Jalisco">
                                                <option value="Michoacán">
                                                <option value="Morelos">
                                                <option value="Nayarit">
                                                <option value="Nuevo León">
                                                <option value="Oaxaca">
                                                <option value="Puebla">
                                                <option value="Querétaro">
                                                <option value="Quintana Roo">
                                                <option value="San Luis Potosí">
                                                <option value="Sinaloa">
                                                <option value="Sonora">
                                                <option value="Tabasco">
                                                <option value="Tamaulipas">
                                                <option value="Tlaxcala">
                                                <option value="Veracruz">
                                                <option value="Yucatán">
                                                <option value="Zacatecas">
                                            </datalist>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <input list="group" name="group" placeholder="Filtrar por Grupo"
                                                class="btn btn-outline-success p-1 ml-1" />
                                            <datalist id="group">
                                                <option value="Aventura y Naturaleza">
                                                <option value="Ciudades y Patrimonios">
                                                <option value="Cultura">
                                                <option value="Entretenimiento">
                                                <option value="Lujo">
                                                <option value="Pueblos Magicos">
                                                <option value="Salud">
                                                <option value="Sol y Playa">
                                                <option value="Tesoros coloniales">
                                            </datalist>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <input list="routes" name="routes" placeholder="Filtrar por Rutas"
                                                class="btn btn-outline-success p-1 ml-1" />
                                            <datalist id="routes">
                                                <option value="La ruta del Mayab en Yucatán">
                                                <option value="La ruta del Mezcal en Oaxaca">
                                                <option value="La ruta de los cenotes en Quintana Roo">
                                            </datalist>
                                        </a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown ml-auto text-success">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="fa fa-search me-lg-2"></i>
                                        <span class="d-none d-lg-inline-flex">Búsqueda</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-start bg-light rounded-bottom m-0">
                                        <div class="dropdown-item">
                                            <input type="text" class="mb-2 btn-outline-success rounded border-2">
                                            <form class="justify-content-between">
                                                <a href="#" class="btn btn-success btn-success-outline-success" role="button">Buscar</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item dropdown ml-auto text-success">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="fa fa-bell me-lg-2"></i>
                                        <span class="d-none d-lg-inline-flex">Notificaciones</span>
                                        </a>
                                   
                                        {{-- <div class="nav-item dropdown ml-auto text-success">
                                            <i class="fa fa-bell me-lg-2"></i>
                                                <div href="{{ route('centros.create') }}" class="d-none d-lg-inline-flex">¿Desea crear otro centro turístico?</div>
                                            </div>
                                     --}}
                                   
                                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                        <a href="#" class="dropdown-item">
                                            <h6 class="fw-normal mb-0">Perfil Actualizado!</h6>
                                            <small>Hace 05 minutos...</small>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a href="#" class="dropdown-item">
                                            <h6 class="fw-normal mb-0">Nuevo evento cerca de zona!</h6>
                                            <small>Hace 15 minutos...</small>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a href="#" class="dropdown-item">
                                            <h6 class="fw-normal mb-0">Nuevo evento cerca de zona!</h6>
                                            <small>Hace 25 minutos...</small>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a href="#" class="dropdown-item text-center">Mira todas tus notificaciones!</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- Navbar End -->
                
                    <!-- Sidebar Start -->
                    <section id="container">
                        <div class="col-12 bg-light">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1dxpuaw5xnpbefWLOHGwuiph7Ucg0UFw&ehbc=2E312F" 
                            width="100%" height="600"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        </div>
                    </section>
                    <!-- Sidebar End -->
                
                    <!-- CRUD Start -->
                    <div id="crud">
                        <!--Ponlo Aqui-->
                    </div>
                    <!-- CRUD End -->
                
                    <!-- Footer Start -->
                    <div class="container-fluid bg-dark text-white border-top py-2 px-sm-3 px-md-5"
                        style="border-color: rgba(256, 256, 256, .1) !important;">
                        <div class="row">
                            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                                <div class="container-fluid bg-dark text-white py-2 px-sm-3 px-md-3"
                                    style="border-color: rgba(256, 256, 256, .1) !important;">
                                    <div class="row">
                                        <a href="" class="navbar-brand">
                                            <h4 class="text-success"><span class="text-white">Viajemos por </span>Mexico</h1>
                                        </a>
                                        <div class="d-flex justify-content-center text-md-left">
                                            <a class="btn btn-outline-success btn-square mr-2" href="https://twitter.com/login"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-success btn-square mr-2" href="https://es-la.facebook.com/login"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-success btn-square mr-2" href="https://www.linkedin.com/login"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a class="btn btn-outline-success btn-square" href="https://z-p15.www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->
                
                    <!-- Bootstrap JavaScript Start-->
                    <!-- Option 1: Bootstrap Bundle with Popper -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
                        crossorigin="anonymous"></script>
                    <!-- Option 2: Separate Popper and Bootstrap JS -->
                    <!--
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
                    -->
                    <!-- Bootstrap JavaScript End-->
                
                </body>
                
                </html>
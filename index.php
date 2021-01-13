<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="description" content="Coca-Cola es la bebida y bla, bla, bla, bla,....">
    <meta name="keywords" content="bebida, gaseosa, cola">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio - CocaCola</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    
    <script src='main.js'></script>
    <script src="https://kit.fontawesome.com/03af06112f.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html">
                <img src="img/logo.svg" class="logo">
            </a>
            <nav>
                <a href="#inicio">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#servicios">Servicios</a>
                <a href="#galeria">Galería</a>
                <a href="#contactenos">Contáctenos</a>
            </nav>
            <a href="#" class="hamb"><i class="fas fa-bars"></i></a>
        </div>
    </header>

    <main>
        <section id="inicio">
            <img src="img/bannerprincipal.jpg">
            <div class="bloque-inicio">
                <h1>Bienvenidos a Coca Cola</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias nesciunt, praesentium sit veritatis nostrum
                    architecto iusto repellendus sunt sapiente, dolorum commodi pariatur error velit quisquam, blanditiis cumque
                    ullam! Tempora, qui!
                </p>
                <a href="#nosotros" class="boton boton-rojo">Ver más</a>
            </div>
        </section>

        <section id="nosotros" class="seccion">
            <div class="container">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias nesciunt, praesentium sit veritatis nostrum
                    architecto iusto repellendus sunt sapiente, dolorum commodi pariatur error velit quisquam, blanditiis cumque
                    ullam! Tempora, qui!
                </p>
            </div>
        </section>
            
        <section id="servicios" class="seccion">
            <div class="container">
                <div class="row">
                    <div class="columna columna-33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="img/servicio1.jpg">
                            </div>
                            
                            <div class="bloque-contenido-servicio">
                                <h3>Servicio 1</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nesciunt, praesentium sit veritatis nostrum
                                        architecto iusto repellendus sunt sapiente
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver mas</a>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                   
                    <div class="columna columna-33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="img/servicio2.jpg">
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>Servicio 2</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nesciunt, praesentium sit veritatis nostrum
                                            architecto iusto repellendus sunt sapiente
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver mas</a>
                            </div>
                        </div>
                        <!-- </div> --> 
                    </div>
                   
                    <div class="columna columna-33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="img/servicio3.jpg">
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>Servicio 3</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nesciunt, praesentium sit veritatis nostrum
                                        architecto iusto repellendus sunt sapiente
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver mas</a>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>
 
        <section id="galeria">
            <div class="container-fluid">
                <div class="row">
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio1.jpg">
                            <h4>Imagen 1</h4>
                        </div>
                    </div>

                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio2.jpg">
                            <h4>Imagen 2</h4>
                        </div>
                    </div>

                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio3.jpg">
                            <h4>Imagen 3</h4>
                        </div>
                    </div>

                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio1.jpg">
                            <h4>Imagen 4</h4>
                        </div>
                    </div>

                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio2.jpg">
                            <h4>Imagen 5</h4>
                        </div>
                    </div>

                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio3.jpg">
                            <h4>Imagen 6</h4>
                        </div>
                    </div>
                </div>
            </div>    
        </section>

        <section id="contactenos" class="seccion">
            <iframe scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" 
            src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Bogot%C3%A1+(colombia)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" 
            width="520" height="400" frameborder="0">
            </iframe>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
                        <form action="index.php" method="POST">
                            <div class="form-block">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                            </div>
                            
                            <div class="form-block">
                                <input type="email" name="email" class="form-control" placeholder="e-mail">
                            </div>

                            <div class="form-block">
                                <textarea name="mensaje" placeholder="Mensaje"></textarea>
                            </div>

                            <div class="form-block bloque-ultimo">
                                <input type="submit" class="boton boton-negro" value="Enviar">
                            </div>

                            <?php
                                if($_SERVER["REQUEST_METHOD"] == "POST")
                                {
                                    $nombre = $_POST["nombre"];
                                    $email = $_POST["email"];
                                    $mensaje = $_POST["mensaje"];

                                    if(isset($nombre))
                                    {
                                        if(isset($email))
                                        {
                                            if(isset($mensaje))
                                            {
                                                $para = "dafer.guerrero.dipor@gmail.com";
                                                $asunto = "Esto es una prueba de correo";
                                                $cuerpo = $nombre."\n".$email."\n".$mensaje;
                                                $adicional = "From: noreply@gmail.com";

                                                mail($para,$asunto,$cuerpo,$adicional);
                                            ?>
                                                <p>Envío exitoso</p>
                                            <?php
                                            }
                                        }
                                    }
                                }

                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="columna columna-25 columna-mobile-100">
                    <img src="img/logo-blanco.png" class="logo-footer">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nesciunt, praesentium sit veritatis nostrum
                        architecto iusto repellendus sunt sapiente
                    </p>
                </div>

                <div class="columna columna-25 columna-mobile-100">
                    <h3>Temas relacionados:</h3>
                        <ul>
                            <li><a href="#">Tema 1</a></li>
                            <li><a href="#">Tema 2</a></li>
                            <li><a href="#">Tema 3</a></li>
                        </ul>
                </div>

                <div class="columna columna-25 columna-mobile-100">
                    <h3>Datos de contacto:</h3>
                        <ul>
                            <li>dafer_guerrero@hotmail.com</li>
                            <li>+57 3108764145</li>
                            <li>Sogamoso - Boyacá - Colombia</li>
                        </ul>
                </div>

                <div class="columna columna-25 columna-mobile-100">
                    <h3>Redes sociales:</h3>
                    <ul class="redes">
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="barra-footer">
            &copy; Derechos Reservados - 2020
        </div>
    </footer>
    
    <script src="js/jquery.js"></script>
    <script src="js/funciones.js"></script>
</body>
</html>

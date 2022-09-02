
<?php

    if($_POST){

        echo 'Post';
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!--META-->
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--retrocompatible con microsoft edge-->
        <meta name="author" content=""><!-- quien hace la pagina web / desarrollador -->
        <meta name="copyright" content=""><!--derecho de copyright / derechos de explotacion / es a empresa-->
        <meta name="contact" content=""> <!--se especifica correo electronico de la persona que lleva el mantenimiento del sitio-->
        <meta name="description" content=""> <!--descripcion de la pagina web-->
        <meta name="keywords" content=""> <!--palabras clave por las que se indexan-->
        <meta name="robots" content="NoIndex, NoFollow"> <!--sustituye al robots.txt / el dia que se indexe cambia el content-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">	


        <!-- ESTILOS -->
        <link rel="stylesheet" href="vendor/swiper/css/swiper.min.css">
        <link rel="stylesheet" href="vendor/animateCSS/animate.min.css">
         <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="vendor/jqueryUI/css/jquery-ui.min.css"> <!-- Conectamos el archivo CSS de JQUERYUI --> <!--Hay que ingresar el script del archivo js en la zona de SCRIPTS (debajo, donde escribiomos javascript)-->
        <!-- TITULO % LOGO -->
        <link rel="icon" tyoe="icon/png" href="favicon.png"> <!--va en la carpeta root. El favicon debe llamarse favicon.png. tiene que ser cuadrado. Mismo alto y ancho.-->

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
 

        <title>UranoWeb | Contacto</title>

    </head>
    <body>

        <nav>
            <div class="contenedor">
                <div class="logo">
                    <a href="index.html"><img src="assets/rsc/img/Logo.png" alt=""></a>
                </div>
                <div class="menu">
                    <a href="features.html">Features</a>
                    <a href="pricing.html">Pricing</a>
                    <a href="contacto.php">Contact</a>
                </div>

                <div class="menuMobile">
                   <i class="fas fa-ellipsis-v"onclick="desplegar()"></i>
                <!-- Vertical por CSS ver archivo -->
                    <div id="menu">
                        <div onclick="cerrarMenu()">X</div>

                        <ul>
                            <li>
                                <a href="#">Inicio</a>
                            </li>
                            <li>
                                <a href="features.html">Features</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="contacto.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <section class="formularioContacto">
            <div class="contenedor">
                <div class="formulario">
                   <div class="frente">

                        <form action="" method="POST" name="formuContact">
                            <label for="nombreContacto">Nombre</label>
                            <input type="text" name="nombreContacto" placeholder="Nombre">

                            <label for="apellidoContacto">Apellido</label>
                            <input type="text" name="apellidoContacto" placeholder="Apellido">

                            <label for="emailContacto">Email</label>
                            <input type="text" name="emailContacto" placeholder="Correo Electrónico">

                            <label for="asuntoContacto">Asunto</label>
                            <input type="text" name="asuntoContacto" placeholder="Asunto">

                            <label for="mensajeContacto">Mensaje</label>
                            <textarea name="mensajeContacto" id="" cols="30" rows="10" placeholder="Escriba aquí su mensaje"></textarea>
                            <button id="enviarForm" name="enviaFormulario">Cambiar</button>
                        </form>
                        
                    </div>
                    
                  
                    <div class="reverso">
                        <i class="far fa-check-circle"></i>
                        <h2>Your message has been sent.</h2>
                        <h4><a href="index.html">Back to Home</a></h4>
                    </div>
                    

                </div>
                
            </div>
            
        </section>
        <footer>
            <div class="contenedorFooter">
              
                <div class="footerText">
                    <div class="footerTextTexto">
                        <h2>Get started for free</h2>
                        <p>Join millions of professionals who build websites faster and better than ever before </p>
                    </div>
                    <div class="footerTextFormulario">
                        <input type="text" placeholder="Enter your email address">
                        <button>Get Started</button>
                        
                    </div>
                </div>
                <div class="footerEnlaces">
                    <div class="footerFeatures">
                        <h4>Features</h4>
                        <ul>
                            <li>Editor</li>
                            <li>Design</li>
                            <li>Marketing</li>
                            <li>Theme Builder</li>
                            <li>Popup Builder</li>
                        </ul>
                    </div>
                    <div class="footerFeatures">
                        <h4>Resources</h4>
                        <ul>
                            <li>Community</li>
                            <li>Add-ons</li>
                            <li>Showcase</li>
                            <li>Hosting</li>
                            <li>Hello Theme</li>
                        </ul>
                    </div>
                    <div class="footerFeatures">
                        <h4>Support</h4>
                        <ul>
                            <li>Help Center</li>
                            <li>Support</li>
                            <li>Developers</li>
                            <li>Contact Us</li>
                            <li>About Us</li>
                        </ul>
                    </div>
                    <div class="footerFeatures">
                        <h4>Our Company</h4>
                        <ul>
                            <li>Pricing</li>
                            <li>Careers</li>
                            <li>Trademark</li>
                            <li>Terms & Conditions</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </footer>


    

                <!--ASI SE IMPLMENTA JQUERY --><!-- JQUERY UI DEBE TENER JQUERY INSTALADO-->
        <script type="text/javascript" src="vendor/jquery/jquery-3.5.1.min.js"></script> <!--ASI SE IMPLMENTA JQUERY -->
        <script type="text/javascript" src="vendor/jqueryUI/js/jquery-ui.min.js"></script><!--ASI SE IMPLMENTA JQUERY UI-->
        <script type="text/javascript" src="assets/js/script.js"></script>
        <noscript>Debe habilitar JavaScript</noscript>

        <script type="text/javascript">
/*
        $("#enviarForm").click(function(){
            $(".formulario").css("transform", "translate(-50%,-50%) rotateY(180deg)");
            $(".frente").css("zIndex", "0");
            $(".frente").html("");
            $(".reverso").css("zIndex", "1");
            setInterval(function(){ $(".reverso").css("display", "flex"); }, 200);
            

        });*/

        </script>
    </body>
</html>
<?php
session_start();

// Verificar si el usuario ha iniciado sesión

  
    if ($_SESSION['login'] != 1) {
        header("Location: ../index.php");
        exit();
    }

?>
<?php
// Obtener el nombre del usuario de la sesión
$usuario = $_SESSION['NombreUsuario'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php 
    echo $usuario;
    ?></title>
    <script src="ola"></script>
    <script src="https://kit.fontawesome.com/acd7670049.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/ran__1_-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/perfil.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    
</head>

<body>
    <div id="loader"class="hidden">
        <img src="../img/girauwu.png" alt="Loading...">
      </div>
    <header>
        <a href="index.html" class="logo">
            <img class="logo" src="../img/ran__1_-removebg-preview.png" alt="Logo">
          </a>
        <nav class="head_titu">
        
           
            <a href="" class="incioh">INICIO</a>
            <a href="#sobreno">ACERCA DE</a>
            <a href="#footer">CONTACTO</a>
            <a href="tienda/tienda1/index.php">PLANTAS</a>

            <img class="user-icon" src="../img/user.png" alt=""><ul class="user-options">
            <li><a href="acciones/cerrar_sesion.php">Cerrar sesión</a></li>
        </lu>
        

        </nav>
        <button id="toggle-nav" class="toggle-nav-btn">☰</button>

        <section class="textos-header">
            <h1 style='--content: "<?php 
    echo $usuario;
    ?>"; --star-color: #e53232; --end-color: #f1e314; --delay: 0s;'> <?php 
    echo $usuario;
    ?></h1>
            <h2 style='--content: "RAN"; --star-color: #4d32e5d2; --end-color: #00ff6ad0; --delay: 0s; '>RAN</h2>

        </section>
        <div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
         </div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros" id="sobreno"> 
            <h2 class="titulo">¿QUIENES SOMOS?</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/orquidea.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>MISIÓN</h3>
                    <p class="parrafo">Crear en las nuevas generaciones una  mas cultura ambiental por medio de aplicativos digitales con el fin de recalcar la importancia de la naturaleza.

                    </p>
                    <h3><span>2</span>VISIÓN</h3>
                    <p class="parrafo">RAN se ve como una de las empresas mas influyentes en la industria de la naturaleza y software llegando a ser una de las empresas mas exitosas en este ámbito. </p>
                </div>
            </div>
        </section>
        <section id="portafolio" class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">plantas</h2>
                <div class="galeria-port">
                    <div class="imagen-port" id="po1">
                        <img src="img/plantas/suculentas.jpg" alt="">
                        <div class="hover-galeria" id="im1">
                            <img class='logo3'src="img/cactus (1).png" alt="">
                            <p>suculentas</p>
                        </div>
                    </div>
                    <div class="imagen-port" id="po2">
                        <img src="img/arreglofloral.jpg" alt="">
                        <div class="hover-galeria"id="im2" >
                            <img  src="img/flores.png" alt="">
                            <p>Arreglos</p>
                        </div>
                    </div>
                   <div class="imagen-port" id="po3">
                        <img src="img/carnivora.png">
                        <div class="hover-galeria" id="im3">
                           <a href="inicio_sesion/inicio.html"> <img  src="img/carne.png" alt=""></a>
                            <p>CARNIVORAS</p>
                        </div>
                    </div></a>
                    <div class="imagen-port" id="po4">
                        <img src="img/portada.jpg" alt="holauwu">
                        <div class="hover-galeria" id="im4">
                            <img src="img/lirio.png" alt="">
                            <p>jardin</p>
                        </div>
                    </div>
                    <div class="imagen-port" id="po5">
                        <img src="img/7915180_3768851.jpg" alt="">
                        <div class="hover-galeria" id="im5">
                            <img src="img/leaf (1).png" alt="">
                            <p>interior</p>
                        </div>
                    </div>
                    <div class="imagen-port" id="po6">
                        <img src="img/Imagen1.jpg" alt="">
                        <div class="hover-galeria" id="im6">
                            <img src="img/orquid.png" alt="">
                            <p>orquidea</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">destacados</h2>
            <div class="cards">
                <div class="card" id="c2">
                    <img src="img/flor-lirio-sobre-fondo-oscuro-al-generativo.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Lirio Blanco</h4>
                        <p>Lirio elegante, perfecto para jardin. <br>Se ha vuelto tendencia por ser uno de los mejores regalos</p>
                    </div>
                </div>
                <div class="card" id="c3">
                    <img src="img/cereus-cactus-pot.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Cactus cinita</h4>
                        <p>Este cactus es una de tus mejores opcionespara decorar tu escrito.¡Compralo ahora!</p>
                    </div>
                </div>
                <div class="card" id="c2">
                    <img src="img/monstera-deliciosa-plant-pot.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>MONSTERA</h4>
                        <p>Se ha vuelto una de las plantas mas influyentes en la cultura popular, además de ser perfecta para interiores</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">LAS 3 CCC</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/regando-plantas.png" class="imagen-regadera" >
                        <h3>CUIDADOS</h3>
                        <p>RAN te ofrece los cuidador de tus plantas</p>
                    </div>
                    <div class="servicio-ind" id="num4">
                        <img src="img/planta.png" alt="">
                        <h3>CONCIENCIA</h3>
                        <p>RAN busca influir este mundo maravilloso en tu corazon</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/hoja-de-monstera.png" alt="">
                        <h3>CRECER</h3>
                        <p>Como las orquideas RAN busca crecer, renacer y ponilizar</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer id="footer">
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Correo</h4>
                <p>ranreinanectar@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Instagram</h4>
              
                <a href="https://www.instagram.com/_rannewlife/?igshid=YmMyMTA2M2Y%3D" target="_blank"class="iconoinsta"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="content-foo">
                <h4>Facebook</h4>
                <a href="https://web.facebook.com/profile.php?id=100091260855667" target="_blank" class="iconoinsta"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
        </div>
        <h2 class="titulo-final">&copy; RAN | <br>José Luis Cancelado Castro <br> Estefany Daniela Martinez Niño<br>Nicolas Andres Bermeo Rodriguez<br>Juan Diego Salcedo García</h2>
    </footer>
</body>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var userIcon = document.querySelector('.user-icon');
    var userOptions = document.querySelector('.user-options');

    // Ocultar los elementos al inicio
    userOptions.style.display = 'none';

    userIcon.addEventListener('click', function() {
      userOptions.style.display = userOptions.style.display === 'block' ? 'none' : 'block';
    });
  });
</script>
<script>
    // Ocultamos la pantalla de carga después de un cierto período de tiempo
    window.addEventListener('load', function(){
        const loader = document.getElementById('loader');
        setTimeout(function(){
            loader.classList.add('fadeOut');
        }, 2000); // 2 segundos de tiempo de carga
    });
</script>
<script>const toggleNavBtn = document.getElementById('toggle-nav');
    const nav = document.querySelector('nav');
    
    toggleNavBtn.addEventListener('click', function() {
      nav.classList.toggle('active');
    });
    </script>
</html>
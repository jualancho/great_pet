<?php
session_start();

if (isset($_SESSION["nombre"])) {
    $nombre = $_SESSION["nombre"];
}
if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION["id_usuario"];
    $modo = 1;
} else{
    $modo = 0;
}
$_SESSION["pagina"] = 1;
var_dump($_SESSION["pagina"]);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo_pestaña.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="menu/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <title>Great Pet</title>
</head>
<body>

    <template id="tpl__carnet1">
        <div class="redesu roboto">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn a"><?php echo ''.$nombre.'' ?>
                    <span class="material-icons-outlined dropbtn flecha_abajo">
                        expand_more
                    </span></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="mi_usuario.php" class="opciones roboto">Mi Perfil</a>
                    <a href="mis_mascotas.php" class="opciones roboto">Mis Mascotas</a>
                    <a href="logout.php" class="opciones roboto">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </template>

    <template id="tpl__carnet2">
        <div class="redes roboto">
            <a href="login.php" class="registrarse">Iniciar sesión</a>
        </div>
    </template>

    <header>
        <div class="headersi headersi_index">

            <a href="index.php">
                <img class="img-header FOTO-LOGO" src="img/logo_definitivo.png" alt="s">
            </a>

            <nav class=" roboto2">
                <div class="menu-icon menu-icon_index" id="menu-icon">&#9776;</div>
                <ul class="navegacion menu" id="menu">

                    <H2 class="nombre_proyecto_en_menu sigmar">Great Pet</H2>

                    <div class="linea_menu_res"></div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="#">
                                <h4>Inicio</h4>
                            </a>
                        </li>
                    </div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="adopcion.php">
                                <h4>Adopción</h4>
                            </a>
                        </li>
                    </div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="busqueda.php">
                                <h4>Búsqueda</h4>
                            </a>
                        </li>
                    </div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="qr.php">
                                <h4>QR</h4>
                            </a>
                        </li>
                    </div>

                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="servicios.php">
                                <h4>Servicios</h4>
                            </a>
                        </li>
                    </div>
                </ul>
            </nav>
            <div id="boton_sesion">
                
            </div>
            <script src="menu/script.js"></script>
        </div>
    </header>


    <main>
        <div class="contenedor1-main-index">
            <div class="caja1">
                <div class="CAJA-PERRO-CARTEL-ONDA">
                    <div class="caja2">
                        <img class="imagen-perro-cartel" src="img/perrocartel.png" alt="">
                        <div class="contenedor-descripcion">
                            <div class="descripcion-greatpet releway">
                                <p>GREAT PET, donde el cuidado animal es nuestra pasión. Te brindamos detalles sobre la
                                    adopción de mascotas, servicios de búsqueda para peludos perdidos y recomendaciónes
                                    de las mejores tiendas de mascotas.</p>
                            </div>
                            <div class="linea"></div>
                            <img class="logo-caja" src="img/logo_definitivo.png" alt="s">



                        </div>
                    </div>

                    <svg preserveAspectRatio="none" class="ondas" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 1440 320">
                        <path fill="#fcf2eb" fill-opacity="1"
                            d="M0,160L26.7,186.7C53.3,213,107,267,160,282.7C213.3,299,267,277,320,240C373.3,203,427,149,480,154.7C533.3,160,587,224,640,224C693.3,224,747,160,800,160C853.3,160,907,224,960,240C1013.3,256,1067,224,1120,202.7C1173.3,181,1227,171,1280,160C1333.3,149,1387,139,1413,133.3L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                        </path>
                    </svg>

                    <svg class="ondas_responsive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#fcf2eb" fill-opacity="1"
                            d="M0,192L60,181.3C120,171,240,149,360,154.7C480,160,600,192,720,208C840,224,960,224,1080,208C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                        </path>
                    </svg>

                </div>
            </div>
        </div>


        <div class="contenedor2-main-index">
            <div class="tarjetas">
                <div class="tarj">

                    <div class="logotipo-tarjeta">
                        <div class="borde1">
                            <div class="borde2">
                                <img class="img-tarjeta1" src="img/adopcion-tarjeta.png" alt="Adopcion">
                            </div>
                        </div>
                    </div>

                    <div class="texto-tarjeta">
                        <div class="titulo-tarjeta lexend">Adopcion</div>
                        <div class="parrafo-tarjeta roboto">Adopta tu amigo peludo y cambia dos vidas para siempre. Encuentra a tu compañero ideal aquí.</div>
                    </div>


                    <a class="ir-link" href="adopcion.html">
                        <div class="caja-ir">
                            <h3 class="ir sigmar">IR</h3>
                        </div>
                    </a>

                </div>
                <div class="tarj">
                    <div class="logotipo-tarjeta">
                        <div class="borde1">
                            <div class="borde2">
                                <img class="img-tarjeta2" src="img/busqueda-tarjeta.png" alt="Adopcion">
                            </div>
                        </div>
                    </div>

                    <div class="texto-tarjeta">
                        <div class="titulo-tarjeta lexend">Busqueda</div>
                        <div class="parrafo-tarjeta roboto">Encuentra tu compañero perfecto: explora nuestra sección de búsqueda de mascotas</div>
                    </div>
                    <a class="ir-link" href="busqueda.html">
                        <div class="caja-ir">
                            <h3 class="ir sigmar">IR</h3>
                        </div>
                    </a>
                </div>


                <div class="tarj">
                    <div class="logotipo-tarjeta">
                        <div class="borde1">
                            <div class="borde2">
                                <img class="img-tarjeta3" src="img/QR-tarjeta.png" alt="Adopcion">
                            </div>
                        </div>
                    </div>

                    <div class="texto-tarjeta">
                        <div class="titulo-tarjeta lexend">QR</div>
                        <div class="parrafo-tarjeta roboto">QR: conoce a nuestras mascotas y accede a su información con un escaneo rápido.</div>
                    </div>

                    <a class="ir-link" href="qr.html1">
                        <div class="caja-ir">
                            <h3 class="ir sigmar">IR</h3>
                        </div>
                    </a>
                </div>

                <div class="tarj">
                    <div class="logotipo-tarjeta">
                        <div class="borde1">
                            <div class="borde2">
                                <img class="img-tarjeta4" src="img/servicios.png" alt="Adopcion">
                            </div>
                        </div>
                    </div>

                    <div class="texto-tarjeta">
                        <div class="titulo-tarjeta lexend">Servicios</div>
                        <div class="parrafo-tarjeta roboto">Descubre servicios de calidad para tus mascotas: recomendaciones para su bienestar y felicidad.</div>
                    </div>

                    <a class="ir-link" href="servicios.html">
                        <div class="caja-ir">
                            <h3 class="ir sigmar">IR</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>



    </main>

    <footer>
        <div class="caja-contenedora-footer">

            <div class="caja-footer_1">
                <img class="img-footer" src="img/logo-footer.png" alt="">
            </div>

            <div class="contenedor_caja_2_3_4">
                <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo">
                        <div class="titulo-contactos-footer roboto">
                            <h2>¿Quienes somos?</h2>
                        </div>
                    </div>


                    <div class="caja-footer_3-linea"></div>


                    <div class="caja-footer_4-descripcion">
                        <div class="caja-des roboto">

                            <div class="a-footer">
                                <a>
                                    Great Peat es una asociación civil sin fines de lucro abocada a difundir, proteger y
                                        promover los derechos de los animales.</a>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo">
                        <div class="titulo-contactos-footer roboto">
                            <h2>Contactos</h2>
                        </div>
                    </div>
                    <div class="caja-footer_3-linea"></div>
                    <div class="caja-footer_4-descripcion">
                        <div class="caja-des roboto">

                            <div class="a-footer">
                                <H5 >Gmail :</H5>
                                <a><u>greatpet2023@gmail.com</u></a>
                            </div>
                            <div class="a-footer ">
                                <H5 class="hlds">whastapp :</H5>
                                <a><u>+54 9 11 6244 - 4423</u></a>
                            </div>
                            <div class="a-footer">
                                <H5 class="hlds">facebook :</H5>
                                <a><u>Great Pet Arg</u></a>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- <div class="caja-titulo-texto-footer">
                    <div class="caja-footer_2-titulo"></div>
                    <div class="caja-footer_3-linea"></div>
                    <div class="caja-footer_4-descripcion">
                        
                    </div>
                </div> -->
            </div>
        </div>
    </footer>

    <script type="text/javascript">

        function modo(){
            var modo=<?php echo $modo; ?>;
            boton_sesion.innerHTML = "";
            if (modo==1) {
                const tpl = tpl__carnet1.content
                const clon = tpl.cloneNode(true);
                boton_sesion.appendChild(clon);
            }
            if (modo==0) {
                const tpl = tpl__carnet2.content
                const clon = tpl.cloneNode(true);
                boton_sesion.appendChild(clon);
            }
        }

        modo();

    </script>

</body>

<script src="menu_responsive.js"></script>

</html>
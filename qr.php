<?php
session_start();

if (isset($_SESSION["nombre"])) {
    $nombre = $_SESSION["nombre"];
}
if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION["id_usuario"];
    $modo = 1;
} else{
    header("Location: login.php");
    exit();
}
$_SESSION["pagina"] = 4;
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/qr.css">
    <link rel="stylesheet" type="text/css" href="menu/styles.css">

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
        <div class="headersi">

            <a href="index.php">
                <img class="img-header FOTO-LOGO" src="img/logo_definitivo.png" alt="s">
            </a>

            <nav class=" roboto2">
                <div class="menu-icon" id="menu-icon">&#9776;</div>

                <ul class="navegacion menu" id="menu">
                    <H2 class="nombre_proyecto_en_menu sigmar">Great Pet</H2>

                    <div class="linea_menu_res"></div>
                    <div class="contenedor_navegacion">
                        <li>
                            <a class="TEXTO-LINK" href="index.php">
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
                            <a class="TEXTO-LINK" href="#">
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

        <div class="contenedor-QR-main-adopcion">
            <div class="fondo_contenedor-cartel_gato_qr">
                <div class="contenedor-cartel_gato_qr">

                    <div class="logo_negro-fondo-cartel"></div>

                    <div class="contenedor_img_gato_qr"> </div>

                    <div class="titulo_mensaje_gato_qr">
                        <div class="titulo_gato_qr sigmar">
                            <p>Sistema QR</p>
                        </div>
                        <div class="mensaje_gato_qr releway">
                            <p>¡Descarga el QR de tu mascota para mas seguridad!</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="fondo_contenedor_tarjetas_mascotas_qr">
                <div class="contenedor_tarjetas_mascotas_qr">
                    <div class="titulo_selecciona_mascota lexend">
                        <P>SELECCIONA TU MASCOTA</P>
                    </div>
                    <div class="linea_titulo_tarjetas_mascotas_qr"></div>
                    <div class="contenedor_tarjetas_qr" id="tarjeta_qr_contenedor">







                        <template id="tarjeta_qr">


                            <div class="tarjetas_mascotas_qr">

                                <div class="img_tarjeta_qr_mascota"></div>

                                <div class="contenedor_nombre_crear_qr_mascota">
                                    <div class="nombre_mascota_tarjeta_qr lexend">
                                        <span class="tarjeta_qr_nombre">Laika</span>
                                    </div>

                                    <a>
                                        <div class="contenedor_generador_qr roboto2 ">
                                            <p class="descargar_qr_">Descargar QR</p>
                                        </div>
                                    </a>
                                </div>

                            </div>


                        </template>









                    </div>
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
                                <H5>Gmail: </H5>
                                <a><u>greatpet2023@gmail.com</u></a>
                            </div>
                            <div class="a-footer ">
                                <H5 class="hlds">Whatsapp: </H5>
                                <a><u>+54 9 11 6244 - 4423</u></a>
                            </div>
                            <div class="a-footer">
                                <H5 class="hlds">Facebook: </H5>
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

</body>

<script src="https://unpkg.com/qrious@4.0.2/dist/qrious.js"></script>

<script>
    async function loadListado(url) {
        const response = await fetch(url);
        const data = await response.json();
        return data;
    }

    loadListado("https://mattprofe.com.ar/alumno/great_pet/api/usuario/listar_mascota_qr/2").then(mascotas => {
        if (mascotas[0].errno == 200) {

            mascotas[1].forEach(mascota => {
                const tpl = tarjeta_qr.content;
                const clon = tpl.cloneNode(true);
                clon.querySelector(".tarjeta_qr_nombre").textContent = mascota.nombre;
                clon.querySelector(".img_tarjeta_qr_mascota").style.backgroundImage = "url('img/" + mascota.imagen + "')";
                clon.querySelector(".descargar_qr_").id = mascota.id_mascota;
                tarjeta_qr_contenedor.appendChild(clon);
            })
        }

        tarjeta_qr_contenedor.innerHTML = tarjeta_qr_contenedor.innerHTML + '<a href="registro_mascotas.php"><div class="tarjetas_mascotas_qr_añadir_mascota"><div class="contenedor_mas_a_m"><span class="material-icons-outlined mas_añadir_m">add</span><div class="texto_añadir_mascota roboto2"><P>AÑADIR MASCOTA</P></div></div></div></a>';

    })
    function descargarQr(nombre, id) {
        imagen = document.createElement("img");
        new QRious({
            element: imagen,
            value: "https://mattprofe.com.ar/alumno/great_pet/info-qr.html?id_mascota=" + id,
            size: 500,
            backgroundAlpha: 0,
            foreground: "black",
            level: "H",
        });
        const enlace = document.createElement("a");
        enlace.href = imagen.src;
        enlace.download = nombre + "-Great-Pet.png";
        enlace.click();
    }
    tarjeta_qr_contenedor.addEventListener("click", e => {

        console.log(e)
        if (e.target.className == "descargar_qr_") {
            descargarQr(e.target.id, e.target.id);
        }
    });
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

<script src="menu_responsive.js"></script>

</html>
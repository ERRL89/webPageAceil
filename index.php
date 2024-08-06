<!DOCTYPE html>
<html lang="es-MX" prefix="og: https://ogp.me/ns#">

    <head>
        <?php require "head.php"; ?>
        <title>ACIL México</title>
        <link rel="canonical" href="https://acil.mx" />
        <meta property="og:title" content="ACIL México Revolucionando la Industria de Tecnología y Seguridad"/>
        <meta property="og:url" content="https://acil.mx" />
        <meta property="og:image" content="https://acil.mx/images/og/og-image.png" />
    </head>

    <body>
        
        <!-- HEADER-->
        <?php require "header.php"; ?>

        <main>
            <!-- CAROUSEL INICIAL-->
            <section id="carouselInicio">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="titleContainer text-center">
                            <h1 class="title">REVOLUCIONANDO LA INDUSTRIA DE TECNOLOGÍA Y SEGURIDAD EN MÉXICO</h1>
                            <div class="containerSubTitle">
                                <h2 class="subTitle">Integramos suscripciones a sistemas de seguridad con el objetivo de solucionar las necesidades del cliente sin afectar su economía.</h2>
                            </div>
                            
                        </div>
                        <div class="carousel-item active">
                            <img src="./images/carousel/Carrucel 1.png" class="d-block w-100 imgCarousel" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/carousel/Carrucel 2.png" class="d-block w-100 imgCarousel" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/carousel/Carrucel 3.png" class="d-block w-100 imgCarousel" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            
            <!-- CLIENTES ACIL-->
            <section class="marquee-container">
                <marquee behavior="scroll" direction="right" scrollamount="10">
                    <img class="imgMarquee mx-4" src="./images/clientes/1.svg">
                    <img class="imgMarquee mx-4" src="./images/clientes/2.svg">
                    <img class="imgMarquee mx-4" src="./images/clientes/3.svg">
                    <img class="imgMarquee mx-4" src="./images/clientes/4.svg">
                    <img class="imgMarquee mx-4" src="./images/clientes/5.svg">
                    <img class="imgMarquee mx-4" src="./images/clientes/6.svg">
                    <img class="imgMarquee mx-4" src="./images/clientes/7.svg">
                    <img class="imgMarquee mx-4" src="./images/clientes/8.svg">
                </marquee>
            </section>

            <!-- TEXTO RELEVANTE -->
            <section>
                <div class="mt-5 MB-5 text-center containerSuscription">
                    <h3 class="titleSuscription">NUESTRO OBJETIVO</h3>
                    <div class="lineTitle"></div>
                    <div class="containerSubtitleSuscription">
                        <h4 class="subtitleSuscription">Con nuestro <b>servicio integral</b> y <b>tecnología de calidad</b> aseguramos que nuestros clientes disfruten de una <b>tranquilidad</b> constante <b>con un solo proveedor.</b>
                        <br><br>El modelo de <b>suscripción ACIL</b> garantiza <b>seguridad</b> para <b>hogares, negocios</b> y <b>grandes corporativos.</b></h4>
                    </div>
                </div>
            </section><br><br>

            <!-- BENEFICIOS -->
            <section>
                <div class="text-center beneficios">
                    <h4>BENEFICIOS DE LAS SUSCRIPCIONES ACIL</h4>
                </div>
                <div>
                    <div class="imgAcilTotalContainer text-center">
                        <img src="./images/beneficios/Acil total.svg" class="p-3 img-fluid mt-5" alt="">
                        <div>
                            <div class="beneficios1 mt-4">
                                <div class="beneficioContainer">
                                    <img src="./images/beneficios/Proyecto.svg" class="img-fluid imgBeneficios" alt="">
                                    <div class="information mt-4">
                                        <h5>Diseño del proyecto</h5>
                                        <h6>Creamos un plan de seguridad
                                        hecho a tu medida.</h6>
                                    </div>
                                </div>

                                <div class="soporte beneficioContainer">
                                    <img src="./images/beneficios/Suministro.svg" class="img-fluid imgBeneficios" alt="">
                                    <div class="information mt-4">
                                        <h5>Suministro de equipos</h5>
                                        <h6>Contamos con todos los equipos necesarios para tu sistema de seguridad.</h6>
                                    </div>
                                </div>

                                <div class="beneficioContainer">
                                    <img src="./images/beneficios/Instalación.svg" class="img-fluid imgBeneficios" alt="">
                                    <div class="information mt-4">
                                        <h5>Instalación profesional</h5>
                                        <h6>Realizamos una instalación
                                        estética y de la más alta calidad.</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="beneficios2">
                                <div class="soporte beneficioContainer">
                                    <img src="./images/beneficios/Capacitación.svg" class="img-fluid imgBeneficios" alt="">
                                    <div class="information mt-4">
                                        <h5>Soporte técnico
                                        y capacitación</h5>
                                        <h6>Apoyo remoto y asesoramiento para
                                        el correcto manejo de los equipos.</h6>
                                    </div>
                                </div>

                                <div class="mantenimiento beneficioContainer">
                                    <img src="./images/beneficios/Mantenimiento.svg" class="img-fluid imgBeneficios" alt="">
                                    <div class="information mt-4">
                                        <h5>Mantenimiento
                                        y refacciones</h5>
                                        <h6>Realizamos 2 visitas anuales con el objetivo de mantener un correcto funcionamiento del equipo.</h6>
                                    </div>
                                </div>

                                <div class="mantenimiento beneficioContainer">
                                    <img src="./images/beneficios/Garantía.svg" class="img-fluid imgBeneficios" alt="">
                                    <div class="information mt-4">
                                        <h5>Garantía de 3 años </h5>
                                        <h6 class="garantiaText">Nos comprometemos por garantizar la calidad de nuestros equipos.</h6>
                                    </div>
                                </div>
                                
                                <div class="beneficioContainer">
                                    <img src="./images/beneficios/Impuestos.svg" class="img-fluid imgBeneficios" alt="">
                                    <div class="information mt-4">
                                        <h5>100% deducible
                                        de impuestos </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <br><div class="barraEspacio"></div>

            <!-- ¿POR QUÉ UNA SUSCRIPCIÓN? -->
            <section>
                <div class="mt-5 text-center containerSuscription">
                    <h3 class="titleSuscription">¿POR QUÉ UNA SUSCRIPCIÓN?</h3>
                    <div class="lineTitle"></div>
                    <div class="containerSubtitleSuscription">
                        <h4 class="subtitleSuscription">Adquirir una <b>suscripción</b> a sistemas de seguridad con <b>ACIL</b>, proporciona <b>beneficios exclusivos sin costo adicional.</b> Incluye suministro de equipos, instalación de calidad, actualizaciones constantes, mantenimiento y refacciones garantizando una <b>seguridad avanzada.</b><br><br><b>Con mensualidades accesibles para todos los usuarios.</b></h4>
                    </div>
                </div>
            </section>

            <div class="barraEspacio2"></div>

            <!-- PASOS PARA ADQUIRIR TU SUSCRIPCIÓN -->
            <section>
                <div class="p-5 text-center containerAddSuscription">
                    <h3 class="titleSuscription">PASOS PARA ADQUIRIR TU SUSCRIPCIÓN</h3>
                    
                    <div class="row container containerSteps">
                        <div class="col-md-6 containerImg">
                            <img src="./images/Mujer Laptop.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="containerStep col-md-6">
                                    <div class="text-start">
                                        <span class="numStep">1</span>
                                        <span class="titleStep">ESCOGER</span>
                                    </div>
                                    <div class="informationStep">
                                        <p>Tenemos 3 paquetes ideales para brindarte seguridad en todo momento.</p>
                                        <p>¿No es lo que buscas?</p>
                                        <p>Contáctanos y un asesor te brindará una solución a la medida.</p>
                                    </div>
                                </div>
                                <div class="containerStep col-md-6">
                                    <div class="text-start">
                                        <span class="numStep">2</span>
                                        <span class="titleStep">CONTRATACIÓN</span>
                                    </div>
                                    <div class="informationStep">
                                        <p>¡Sin complicaciones!</p>
                                        <p></p>
                                        <p>Con unos simples pasos, coloca tus datos y realiza tu contrato en minutos.</p>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="containerStep col-md-6">
                                    <div class="text-start">
                                        <span class="numStep">3</span>
                                        <span class="titleStep">INSTALACIÓN</span>
                                    </div>
                                    <div class="informationStep">
                                        <p>¡Sin costos extra!</p>
                                        <p></p>
                                        <p>Enviaremos un equipo capacitado para realizar la instalación.</p>
                                    </div>
                                </div>
                                <div class="containerStep col-md-6">
                                    <div class="text-start">
                                        <span class="numStep">4</span>
                                        <span class="titleStep">DISFRUTAR</span>
                                    </div>
                                    <div class="informationStep">
                                        <p>Es hora de disfrutar la nueva forma de vivir con seguridad.</p>
                                        <p></p>
                                        <p></p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="barraEspacio"></div>

            <!-- CARACTERISTICAS DE SISTEMAS DE SEGURIDAD 
            <section>
                <div class="text-center mt-5 containerSystems">
                    <h3 class="titleSuscription">CARACTERÍSTICAS DE NUESTROS SISTEMAS DE SEGURIDAD</h3>
                    <div class="lineTitle text-center"></div>
                    <div class="mt-5 containerImgSystems">
                        <img src="./images/Info casa 3.svg" class="img-fluid imgCasa" alt="">
                    </div>
                </div>
            </section> -->

            <!-- CARACTERISTICAS DE SISTEMAS DE SEGURIDAD -->
            <section>
                <div class="text-center mt-5 containerSystems">
                    <h3 class="titleSuscription">CARACTERÍSTICAS DE NUESTROS SISTEMAS DE SEGURIDAD</h3>
                    <div class="lineTitle text-center"></div>
                    <div class="mt-5 containerImgSystems">
                        <div class="imgCaracteristicas">
                            <img src="./images/Cámaras.svg" class="img-fluid" alt="">
                        </div>
                        <div class="imgCaracteristicas">
                            <img src="./images/Casa.png" class="img-fluid" alt="">
                        </div>
                        <div class="imgCaracteristicas">
                            <img src="./images/Alarmas.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <div class="barraEspacio2"></div>

            <!-- NUESTROS CASOS DE ÉXITO -->
            <section class="d-flex justify-content-center align-items-center mb-5">
                <div class="mt-5 containerCasosExito text-center">
                <h3 class="titleSuscription">NUESTROS CASOS DE ÉXITO</h3>
                    <marquee behavior="scroll" direction="right" scrollamount="7" class="mt-3">
                        <img src="./images/casosExito/1.svg" class="mx-4">
                        <img src="./images/casosExito/2.svg" class="mx-4">
                        <img src="./images/casosExito/3.svg" class="mx-4">
                        <img src="./images/casosExito/4.svg" class="mx-4">
                        <img src="./images/casosExito/5.svg" class="mx-4">
                    </marquee>
                </div>
                
            </section>

            <div class="barraEspacio"></div>

            <!-- COBERTURA NACIONAL -->
            <section>
                <div class="mt-5 containerCoberturaNacional text-center">
                    <h3 class="titleSuscription">CONTAMOS CON COBERTURA NACIONAL</h3>
                    <div class="lineTitle text-center"></div>
                    <h4 class="mt-2 titleSuscription">OFICINAS REGIONALES</h4>
                    
                    <div class="mt-4 containerSucursales">
                        <div>
                        
                            <img src="./images/sucursales/CDMX.png" alt="">
                            
                            <div class="textSucursal">
                                <h4>CDMX</h4>
                                <span>Francisco Días Covarrubias 3, San rafael, Cuauhtemoc; Ciudad de México 
                                C.P. 06470</span>
                            </div>
                        </div>
                        <div>
                            <img src="./images/sucursales/Guadalajara.png" alt="">
                            <div class="textSucursal">
                                <h4>GUADALAJARA</h4>
                                <span>Av. Periférico Sur 1619, Artesanos, San Pedro Tlaquepaque; Jalisco 
                                C.P. 45598</span>
                            </div>
                        </div>
                        <div>
                            <img src="./images/sucursales/cancun.png" alt="">
                            <div class="textSucursal">
                                <h4>CANCÚN</h4>
                                <span>Rcda. De Las Chachalacas Alfredo V.Bonfil, Cancún; Quintana Roo 
                                C.P. 77560</span>
                            </div>
                        </div>
                        <div>
                            <img src="./images/sucursales/Próximamente.svg" alt="">
                            <div class="textSucursal">
                                <h4>MONTERREY</h4>
                                <span>PRÓXIMAMENTE</span>
                            </div>
                        </div>
                    </div>

                    <div class="containerMap mt-4">
                        <img src="./images/sucursales/Mapa.svg" class="img-fluid" alt="Mapa de sucursales Acil Mexico">
                    </div>
                </div>
            </section>

            <!-- CALL TO ACTION -->
            <div class="callToAction">
                <a href="https://wa.me/5218008082245" target="_blank"><img src="./images/callToAction.svg" alt="Contactanos via whatsapp"></a>
            </div>

        </main>
        
        <!-- FOOTER-->
        <?php require "footer.php"; ?>

    </body>
</html>
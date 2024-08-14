<!DOCTYPE html>
<html lang="es-MX" prefix="og: https://ogp.me/ns#">

    <head>
        <?php require "head.php"; ?>
        <title>ACIL México - Contáctanos</title>
        <link rel="canonical" href="https://acil.mx" />
        <meta property="og:title" content="ACIL México: Bolsa de Trabajo"/>
        <meta property="og:url" content="https://acil.mx" />
        <meta property="og:image" content="https://acil.mx/images/og/og-image.png" />
    </head>

    <body>
        
        <!-- HEADER-->
        <?php require "header.php"; ?>

        <main>

            <section>
                <div class="containerContactanos"></div>
                <div class="formContactanos">
                    <form>
                        <div class="title text-center">
                            <span>¡La oportunidad de una vida segura está con ACIL!</span>
                        </div>
                        <div class="containerForm">
                            <div>
                                <label for="">Nombre completo*</label><br>
                                <input class="inputCamp" type="text">
                            </div>
                            <div>
                                <label for="">Teléfono/Celular*</label><br>
                                <input class="inputCamp" type="text">
                            </div>
                            <div>
                                <label for="">Correo electronico*</label><br>
                                <input class="inputCamp" type="text">
                            </div>
                            <div>
                                <div class="pymeResidencial">
                                   <input type="radio">
                                   <span>Pyme*</span>
                                   <input type="radio">
                                   <span>Residencial*</span>
                                </div>
                                <div class="terminosContainer">
                                   <input type="radio">
                                   <span>Estoy de acuerdo con los <a href="./terminos.php" target="_blank">terminos y condiciones</a>*</span>
                                </div>
                                <div class="text-center d-flex justify-content-center align-items-center">
                                    <div class="g-recaptcha" data-sitekey="6LcCeiMqAAAAAFbfCrAcq7HqQbTEbnkdxZxls7V-"></div>
                                </div>
                                <div class="btnEnviarContainer">
                                    <img src="./images/enviarCV.svg" alt="btnEnviarCV">
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </section>

        </main>
        
        <!-- FOOTER-->
        <?php require "footer.php"; ?>

    </body>

</html>
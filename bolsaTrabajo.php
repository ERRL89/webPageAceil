<!DOCTYPE html>
<html lang="es-MX" prefix="og: https://ogp.me/ns#">

<head>
    <?php require "head.php"; ?>
    <link rel="stylesheet" href="./css/bolsaTrabajo.css"/>
    <title>ACIL México - Bolsa de Trabajo</title>
    <link rel="canonical" href="https://acil.mx" />
    <meta property="og:title" content="ACIL México: Bolsa de Trabajo" />
    <meta property="og:url" content="https://acil.mx" />
    <meta property="og:image" content="https://acil.mx/images/og/og-image.png" />
</head>

<body>

    <!-- HEADER-->
    <?php require "header.php"; ?>

    <main>

        <section>
            <div class="containerBolsaTrabajo"></div>
            <div class="formBolsaTrabajo">
                <form>
                    <div class="title">
                        <span>BOLSA DE TRABAJO</span>
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
                            <label for="">Nuestras Vacantes</label><br>
                            <select name="" id="">
                                <option selected disabled>Seleccionar vacante</option>
                                <option value="1">Vacante 1</option>
                                <option value="2">Vacante 2</option>
                                <option value="3">Vacante 3</option>
                            </select>
                        </div>

                        <div>
                            <label for="">Adjunta tu C.V.</label><br>
                            <input type="file" class="inputFile" id="fileInput" />
                            <div class="text-center subirContainer">
                                <img src="./images/subirCV.svg" alt="">
                            </div>

                            <div class="terminosContainer">
                                <input type="radio">
                                <span>Estoy de acuerdo con los terminos y condiciones*</span>
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
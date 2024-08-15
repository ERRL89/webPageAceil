<!DOCTYPE html>
<html lang="es-MX" prefix="og: https://ogp.me/ns#">

<head>
    <?php require "head.php"; ?>
    <link rel="stylesheet" href="./css/legal.css" />
    <title>ACIL México</title>
    <link rel="canonical" href="https://acil.mx" />
    <meta property="og:title" content="ACIL México: Legales" />
    <meta property="og:url" content="https://acil.mx" />
    <meta property="og:image" content="https://acil.mx/images/og/og-image.png" />
</head>

<body>

    <!-- HEADER-->
    <?php require "header.php"; ?>

    <main>

        <section>
            <div class="containerLegales text-center">
                <div class="lineTitleInicio text-center"></div>
                <h3 class="titleSuscription">LEGALES</h3>
                <div class="lineTitle text-center"></div>
                <div class="containerItems">
                    <a href="aviso.php">
                        <div class="item">
                            <img src="./images/legal/Hexágono.svg" class="hexagono">
                            <span class="textItem">AVISO DE PRIVACIDAD</span>
                            <img src="./images/legal/Botón.svg" class="btnHexagono">
                        </div>
                    </a>

                    <a href="terminos.php">
                        <div class="item">
                            <img src="./images/legal/Hexágono.svg" class="hexagono">
                            <span class="textItem">TÉRMINOS Y CONDICIONES</span>
                            <img src="./images/legal/Botón.svg" class="btnHexagono">
                        </div>
                    </a>

                    <a href="etica.php">
                        <div class="item">
                            <img src="./images/legal/Hexágono.svg" class="hexagono">
                            <span class="textItem">CÓDIGO<br>DE ÉTICA</span>
                            <img src="./images/legal/Botón.svg" class="btnHexagono">
                        </div>
                    </a>

                    <a href="docs/derechosArco.pdf" target="_blank">
                        <div class="item">
                            <img src="./images/legal/Hexágono.svg" class="hexagono">
                            <span class="textItem">DERECHOS<br>A.R.C.O.</span>
                            <img src="./images/legal/Botón.svg" class="btnHexagono">
                        </div>
                    </a>

                </div>
                <div class="lineTitle2 text-center"></div>
            </div>
        </section>

    </main>

    <!-- FOOTER-->
    <?php require "footer.php"; ?>

</body>

</html>
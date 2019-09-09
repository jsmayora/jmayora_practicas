<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tema 2</title>
    <?php include_once "heard/header.php"; ?>
    <link rel="stylesheet"  type="text/css"  href="css/tema_dos.css">
</head>
<body>

    <div class="container">
        <div class="row  fila-1">
            <div class="col-sm-12">
                <h1>Tema 2</h1>
                <h3>Animaciones</h3>
                <h5>Aniumaciones de propiedades Css</h5>
            </div>
            <div class="col-sm-3">
                <p class="form-goruop">animación a la etiqueta "p"</p>
            </div>
            <div class="col-sm-3">
                <p>navegacion</p>
                <div class="form-goruop">
                    <ul id="navegation">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <p>navegacion 2</p>

                <div class="form-goruop">
                    <ul id="condicionDuso">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <p>Animación de color</p>
                <div id="div_q" class="row">
                    texto
                </div>
            </div>
        </div>

        <div class="row  fila-2">
            <div class="col-sm-12">
                <h5>Facilitación (Easing)</h5>
                <p>  aplicando animate a la primera "first" etiqueta p</p>
            </div>
            <div class="col-sm-3">
                <p id="textp">texto to</p>
            </div>
            <div class="col-sm-3">
                <h5>Facilitación avanzada.</h5>
                <p id="tptp">tshdgftrs texto a camniar</p>
            </div>

            <div class="col-sm-6">
                <div class="form-goruop">
                    <h5>Contenidos expansibles.</h5>
                </div>
                <div id="bio" class="">
                    <h2>¿Quien esta en las noticias hoy?</h2>
                    <h3>Elvio Rodríguez</h3>
                    <div>
                        <img src="img/elvio.png" alt="Elvio Rodríguez" width="100" height="100">
                        <p>Novedades sobre Elvio Rodríguez</p>
                    </div>


                    <h3>Jhonny Stardust</h3>
                    <div>
                        <img src="img/jhonny.png" alt="Jhonny Stardust" width="100" height="100">
                        <p>Novedades sobre Jhonny Stardust</p>
                    </div>
                </div>
                <h3>Glendatronix </h3>
                <div>
                    <img src="img/descarga.jpg" alt="Glendatronix" width="100" height="100">
                    <p>Novedades sobre Glendatronix</p>
                </div>
            </div>
        </div>

        <div class="row  fila-3"></div>

        <div class="row  fila-2"></div>

        <div class="row  fila-2"></div>

        <div class="row  fila-2"></div>
    </div>





    <?php include_once 'footer/footer.php'; ?>
    <script src="js/tema_dos.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

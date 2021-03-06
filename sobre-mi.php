<?php $pg="sobre-mi"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.13.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.13.1-web/css/fontawesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <?php
            include_once("menu.php");
            ?>
    </header>
    <section id="sobre-mi">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="my-5 fw-bold">Sobre mí</h1>
                    <h4 class="text-justify">Apasionada por la tecnología y gestión de proyectos. Soy desarrolladora web Full Stack y me
                        capacito cada vez más!</h4>
                   <a href="YamilaCappariCV.pdf">  <button class="btn btn-dark my-5">DESCARGAR CV</button></a>
                </div>
                <div class="col-sm-4 ">

                    <img src="img/mifoto1.png" alt="" class="img-fluid rounded-circle p-2 bg-white w-75">

                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-3 my-3">
                    <div class="bg-white p-3 item">

                        <div class="row">

                            <div class="col-12">
                                <i class="fas fa-code"></i>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">

                                <h3 class="my-3">PROGRAMACION</h3>
                                <p class="my-3">HTML, CSS, Bootstrap, PHP, POO, MVC, Framework Laravel, Javascript,
                                    jQuery,
                                    React.js,
                                    AJAX, REST API, WSDL, JSON</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 p-3 my-3">
                    <div class="bg-white p-3 item">
                        <div class="row">
                            <div class="col-12">
                                <i class="fas fa-database"></i>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">

                                <h3 class="my-3">BASE DE DATOS</h3>
                                <p></p>
                                <p class="my-3">MySQL/MariaDB</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <div class="bg-white p-3 item">
                        <div class="row">
                            <div class="col-12">
                                <i class="fas fa-server"></i>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">

                                <h3 class="my-3">SEREVIDORES</h3>
                                <p class="my-3">XAMPP, HTTP Apache, <br> SSL certbot, migraciones y upgrades.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <div class="bg-white p-3 item">
                        <div class="row">
                            <div class="col-12">
                                <i class="fas fa-language"></i>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">

                                <h3 class="my-3">IDIOMAS</h3>
                                <p class="my-3">INGLES - Intermediate <br>
                                    ESPAÑOL - Nativo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6  p-3">
                    <div class="bg-white p-3 item">
                        <div class="row">
                            <div class="col-12">
                                <i class="fas fa-window-restore"></i>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">

                                <h3 class="my-3">SOFTWARE</h3>
                                <p class="my-3">GIT, GitHub, Visual Code, Sublime, MS Office, Google Docs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6  p-3">
                    <div class="bg-white p-3 item">
                        <div class="row">
                            <div class="col-12">
                                <i class="fas fa-puzzle-piece"></i>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">

                                <h3 class="my-3">HOBBIES</h3>
                                <p class="my-3">Musica, Aire libre, Peliculas y Series</p>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

        </div>



    </section>
    <section id="experiencia" class="bg-dark">
        <div class="container">
            <div class="row">
                <h2 class="text-white m-5">ESTUDIOS EN CURSO:</h2>
                <div class="col-12 d-flex justify-content-around flex-wrap curso my-3 pb-3">
                    <div class="col-md-2">
                        <p class="text-white">2020 – Curso Desarrollo web Full Stack</p>
                    </div>
                    <div class="col-md-2">
                        <img src="img/depcsuite.png" alt="" width="90px" height="90px">
                    </div>
                    <div class="col-md-8">
                        <p class="text-white">Temas que se vieron: HTML, CSS, Bootstrap, PHP, POO, MVC, Framework
                            Laravel, Javascript,
                            jQuery,
                            React.js, </p>
                    </div>
                
                </div>
                <div class="col-12 d-flex justify-content-around my-3 flex-wrap curso pb-3">
                    <div class="col-md-2">
                        <p class="text-white mb-0">2020 – PRESENTE - Tecnico Superior en Análisis de Sistemas</p>
                    </div>
                    <div class="col-md-2">
                        <img src="img/ifts.png" alt="" width="90px" height="90px">
                    </div>
                    <div class="col-md-8">
                        <p class="text-white">Cursando primer año de Técnico Superior en Analisis de Sistemas. </p>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-around mb-4 flex-wrap  my-3 pb-3">
                    <div class="col-md-2">
                        <p class="text-white">2016 - EducacionIT</p>
                    </div>
                    <div class="col-md-2">
                        <img src="img/educacionit.jpg" alt="" width="90px" height="90px">
                    </div>
                    <div class="col-md-8">
                        <p class="text-white">Curso de Html y Css Avanzado</p>
                    </div>
                </div>




            </div>


        </div>



    </section>

   <?php
    include_once("footer.php");
   ?>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sisredy</title>
    <link rel="icon" href="../../Zips para Desarrollo/pdvsa_base_html/dist/imagenes/pozo-de-petroleo.png">
    <link rel="stylesheet" href="lib/bootstrap-5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/pdvsa.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.4/css/all.min.css">
</head>
<body class="fondo_galba">

    <?php include ('vistas/layout/header.php');?>

    <!--Sidebars -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg_fondo_azul2">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 pt-5">

                    <!--Logo de la Web -->
                    <img src="AQUI VA LO DEL LOGO DE LA WEB" class="img_galbaWeb" alt="">
                    <!--logo de la Web -->

                    <!--Menu-->
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                     <!--Acordion-->
                     <div class="accordion" id="accordionPanelsStayOpenExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                             Proyectos
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPanelsStayOpenExample">
                      <div class="accordion-body">
                        <div class="d-grid gap-2">
                        <button id="verProyectosBtn" class="btn btn-primary" type="button">Ver Proyectos</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Asociar Proyecto
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPanelsStayOpenExample">
              <div class="accordion-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Asociar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            Yacimientos
        </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPanelsStayOpenExample">
      <div class="accordion-body">
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button">Reasignacion</button>
        </div>
    </div>
</div>
</div>
</div>

<!--Boton Salir-->
<li class="nav-item">
 <a href="#" class="nav-link align-middle px-0 text-white">
    <i class="fas fa-home"></i> <span class="ms-1 d-none d-sm-inline">Salir</span>
</a>
</li>
</ul>
<hr>
</div>
</div>

<div class="col py-3 " id="contenedorProyectos">
    <?php include ('vistas/layout/contenedor.php'); ?>
</div>

<script>
    $(document).ready(function() {
        $('#verProyectosBtn').click(function() {
            $('#contenedorProyectos').toggle();
        });
    });
</script>

<script src="lib/bootstrap-5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

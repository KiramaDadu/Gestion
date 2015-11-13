<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menú</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL_BASE."/public/css2/bootstrap.min.css";?>">

    <!-- Custom CSS -->
    <link href="<?php echo URL_BASE."/public/css2/sb-admin.css";?>">

    <!-- Morris Charts CSS -->
    <link href="<?php echo URL_BASE."/public/css2/plugins/morris.css";?>">

    <!-- Custom Fonts -->
    <link href="<?php echo URL_BASE."/public/font-awesome2/css/font-awesome.min.css";?>">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Gestión Bibliotecaria del ITSMante</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrador <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="Menu.html"><i class="glyphicon glyphicon-home"></i> Menú</a>
                    </li>
                    <li>
                        <a href="LibrosNuevos.html"><i class="glyphicon glyphicon-book"></i> Libros</a>
                    </li>
                    <li>
                        <a href="Prestamos.html"><i class="fa fa-fw fa-table"></i> Préstamos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Libros
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="glyphicon glyphicon-home"></i>  <a href="Menu.html">Menú</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-book"></i> Agregar libros
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

             <div class="jumbotron">
                    <div class="container">
    <h2>Agregar libro:</h2><br/>
    </div>


  <section id="formulario">
    <div class="container">

<!-- Formulario -->
    <form class="form-horizontal" role="form">

      <div class="form-group">
        <label class="control-label col-sm-2" for="nombre">Codigo:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="codigo" required="required" placeholder="Codigo">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="titulo">Titulo-edicion:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="titulo" required="required" placeholder="Titulo-edicion">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="ISBN">ISBN:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="ISBN" required="required" placeholder="ISBN">
          <p class="help-block"></p>
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="autor">Autor:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="autor" placeholder="Autor">
          <p class="help-block"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="genero">Genero:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="genero" placeholder="Genero">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="descripcion">Descripcion:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="descripcion" required="required" placeholder="Descripcion">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="año">Año de publicacion:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="año" required="required" placeholder="Año">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="editorial">Editorial:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="editorial" required="required" placeholder="Editorial">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="fecha">Fecha de publicacion:</label>

        <div class="col-sm-2">
          <input type="number" class="form-control" id="fecha" min="1" max="12" placeholder="Mes">
        </div>

        <div class="col-sm-2">
          <input type="number" class="form-control" id="fecha" min="1985" max="1998" placeholder="Año">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="ciudad">Ciudad de publicacion:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="ciudad" required="required" placeholder="Ciudad">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="ejemplares">Cantidad de ejemplares:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="ejemplares" required="required" placeholder="">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="cantidad">Cantidad de ejemplares prestados:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="cantidad" required="required" placeholder="">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="paginas">Numero de paginas:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="paginas" required="required" placeholder="">
          <br/>
        </div>
      </div>


    <div class="form-group col-xs-10">
      <div class="col-sm-2">
        <button class="btn btn-primary btn-md" href="Menu.html" type="submit">Guardar</button>
      </div>

      <div class="col-sm-2">
        <button class="btn btn-primary btn-md" href="Menu.html" type="submit">Cancelar</button>
      </div>
    </div>


  </div>
  </section>

            </div>                      

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo URL_BASE."/public/js2/jquery.js";?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL_BASE."/public/js2/bootstrap.min.js";?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo URL_BASE."/public/js2/plugins/morris/raphael.min.js";?>"></script>
    <script src="<?php echo URL_BASE."/public/js2/plugins/morris/morris.min.js";?>"></script>
    <script src="<?php echo URL_BASE."/public/js2/plugins/morris/morris-data.js";?>"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="<?php echo URL_BASE."/public/js2/plugins/flot/jquery.flot.js";?>"></script>
    <script src="<?php echo URL_BASE."/public/js2/plugins/flot/jquery.flot.tooltip.min.js";?>"></script>
    <script src="<?php echo URL_BASE."/public/js2/plugins/flot/jquery.flot.resize.js";?>"></script>
    <script src="<?php echo URL_BASE."/public/js2/plugins/flot/jquery.flot.pie.js";?>"></script>
    <script src="<?php echo URL_BASE."/public/js2/plugins/flot/flot-data.js";?>"></script>

</body>

</html> 



















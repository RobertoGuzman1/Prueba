<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Inicio</title>
<link rel="stylesheet"   type="text/css" href="css/bootstrap.css" >        
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>              
     

</head>

<body bgcolor="">

<nav class="navbar navbar-inverse" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Logotipo</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Enlace #1</a></li>
      <li><a href="#">Enlace #2</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Menú #1 <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Acción #1</a></li>
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #4</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #5</a></li>
        </ul>
      </li>
    </ul>
 
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Enlace #3</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Menú #2 <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Acción #1</a></li>
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #4</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>


<div class="container">

	<div class="row">
    	<div class=" col-md-6 col-lg-6 col-sm-12 col-lg-offset-3 col-md-offset-3 panel panel-primary">
        	<form id="form" action="" name="form">
            	<div class="form-group">
              <h4 align="center"> <strong> Formulario de Alumnos</strong></h4>
                </div>
                <!--Division del Formulario-->
                <div class="row">
                	<div class="col-md-6 col-lg-6">
                <div class="form-group">
                 <label>C&oacute;digo de Alumno:</label>
                 <input type="text" class="form-control" id="codigo" name="codigo" placeholder="C&oacute;digo de Alumno">
               </div>
               <div class="form-group">
                 <label>Nombre de Alumno:</label>
                 <input type="text" class="form-control" id="nombre" name="nombre" placeholder="C&oacute;digo de Alumno">
               </div>
               <div class="form-group">
                 <label>Direcci&oacute;n:</label>
                 <textarea class="form-control" rows="3"></textarea>
               </div>
       			</div>
               <div class="col-md-6 col-lg-6">
               
               
               <div class="form-group">
                 <label>T&eacute;lefono:</label>
                 <div class="input-group">
      				<div class="input-group-addon"><span class=" glyphicon glyphicon-earphone"></span></div>
                	 <input type="text" class="form-control" id="telefo" name="telefo" placeholder="T&eacute;lefono">
                     </div>
               </div>
                <div class="form-group">
                 <label>E-mail:</label>
                 <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
               </div>
               <div class="form-group">
               	<label>Sexo</label>
               <div class="radio">
                  <label>
                    <input type="radio" name="radio" id="radio" value="1" >
                    Masculino
                  </label>
                  <label>
                    <input type="radio" name="radio" id="radio" value="2" >
                    Femenino
                  </label>
                </div>
                 </div>
                 <div class="form-group">
                 <input type="submit" id="enviar" class="btn btn-primary" value="Enviar">
                 </div>
                </div>
                 </div>
            </form>
        </div>
      </div>
</div>

</body>
</html>
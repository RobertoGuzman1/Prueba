<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Insertar Docentes</title>
<link rel="stylesheet"   type="text/css" href="../css/bootstrap.css" >        
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>              
<script type="text/javascript" src="../js/funtions.js"></script>
     

</head>

<body>

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
      <li><a href="index.php">Docentes</a></li>
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
            	<div class="col-lg-4 col-md-4 col-sm-8 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-2 col-xs-offset-1 panel panel-default">
                
       			
                <div align="center"><label><h3>Insertar Docentes</h3></label></div>

                	<form id="form" name="form" action="">
                	 <input type="hidden" class="form-control" id="accion" name="accion" value="insertar">

                		<div class="form-group">
                			<label>C&oacute;digo</label>
                			<input type="text" class="form-control" id="codigo" name="codigo" placeholder="C&oacute;digo" required>
                		</div>
                        <div class="form-group">
                			<label>Nombre</label>
                			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                		</div>
                         <div class="form-group">
                			<label>Apellido</label>
                			<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                		</div>
                        <div class="form-group">
                			<label>T&eacute;lefono</label>
                			<input type="text" class="form-control" id="telefono" name="telefono" placeholder="T&eacute;lefono" required>
                		</div>
                        <div class="form-group">
                			<label>DUI</label>
                			<input type="text" class="form-control" id="dui" name="dui" placeholder="DUI" required>
                		</div>
                        <div class="form-group">
                			<label>E-Mail</label>
                			<input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@gmail.com" required>
                		</div>
                        <div class="form-group"  align="center">
                			
                			<input type="submit" class="btn btn-primary" value="Guardar">
                            <a class="btn btn-success" href="index.php">Cancelar</a>
                		</div>
                	</form>
			 
				        
                       
                   </div> 
                  	
              </div>   
               <div>
                   	<p align="center" class="text-muted">Ingeniería de Software II  
                          </p>
                          <p align="center" class="text-muted">&copy; Todos los Derechos Reservados 2016
                          </p> 
                   </div>           
            </div>
</body>
</html>
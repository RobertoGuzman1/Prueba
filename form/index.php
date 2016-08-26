<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Inicio</title>
<link rel="stylesheet"   type="text/css" href="../css/bootstrap.css" >        
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>              
 
 <script type="text/javascript">   
$(document).ready(function() {
	$('#barra').hide();
});
</script> 
</script>
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
<div class="progress progress-striped active" id="barra">
  <div class="progress-bar" role="progressbar"
       aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
       style="width: 100%">
    <span class="sr-only">45% completado</span>
  </div>
</div>
        <div class="container">
        	<div class="row">
            	<div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                
       
                <div align="center"><label><h3>Docentes</h3></label></div>
			  <?php
           
                include ("../conections/conections.php");
                ?>      
                <div class="form-group">
                <a href="insert_docentes.php" class="btn btn-primary">Nuevo</a>
                	</div>
				  <div class="table-responsive ">  	 
				      <table class="table table-hover table-bordered" id="example">
				                                 <thead>
				                                    <tr bgcolor="#337ab7">
				                                        <th>Nº</th>
				                                        <th>Apellidos y Nombres</th>
				                                        <th>Teléfono</th>
				                                        <th>DUI</th>
				                                        <th>Email</th>
                                                        <th align="center">Acciones</th>
				                                     </tr>
				                                </thead>
				                                <tbody>
				                 
				                                  <?php $user_query=mysql_query("SELECT * FROM docentes ")or die(mysql_error());
				                  while($row=mysql_fetch_array($user_query)){
				                    ;?>
				                                  <tr>
				                                    <td><?php echo $row['id_docente']; ?> </td> 
				                                    <td width="270"><?php echo $row['apellido']; ?>, <?php echo $row['nombre']; ?> </td> 
				                                    <td><?php echo $row['telefono']; ?></td> 
				                                    <td><?php echo $row['dui']; ?></td>  
				                                    <td><?php echo $row['email']; ?></td>
                                                    <td align="center">
				                                   <a  title="Eliminar" class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i> </a>
												   <a title="Modificar" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
													</td>
				                                 </tr>
				                  <?php } ?>
				                           
				                                </tbody>
				                            </table>
				      </div>    
                       <p align="center" class="text-muted">Ingeniería de Software II  
                          </p>
                          <p align="center" class="text-muted">&copy; Todos los Derechos Reservados 2016
                          </p>  	
              </div>            
            </div>
        </div>
</body>
</html>
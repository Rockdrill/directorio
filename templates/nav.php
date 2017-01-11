<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo PATH; ?>"><i class="fa fa-home"></i> Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresas<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php 
         
          $db    = new Conexion();
          $query = "SELECT empresa from personal 
          group by empresa";
          $result = $db->query($query);
          while ($fila = mysqli_fetch_object($result))
           {
             echo ' 
             
             <li><a href="'.PATH.'pages/empresa?n='.$fila->empresa.'">'.$fila->empresa.'</a></li>
             <li class="divider"></li>
             ';
           }


           ?>
          
           </ul>
         
        </li>
      </ul>
      <form class="navbar-form navbar-left" action="<?php echo PATH; ?>pages/busqueda" method="GET" autocomplete="Off">
        <div class="form-group">
          <input type="text" name="n" class="form-control" placeholder="Nombres o Apellidos" required="">
        </div>
        <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
        <a href="#"><strong><?php echo strtoupper($_SESSION[KEY.USER]); ?></strong>
        <i class="glyphicon glyphicon-user text-success"></i>
        </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo PATH; ?>procesos/Logout">Salir</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
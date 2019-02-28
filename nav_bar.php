<?php
session_cache_expire(60);
session_start();
if(empty($_SESSION['usuario'])){
  echo '<script type="text/javascript"> window.location.href = "index.php"</script>';
}
?>
<header>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark nav-transparent">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  ml-auto" style="margin-right:30px;">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Aplicações</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php
              $usuario = explode(" ", $_SESSION['usuario']); 
              echo $usuario[0]; 
            ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Minha conta</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="inc/inc.sair.php">sair</a>
          </div>
        </li>
      
      </ul>
      
    </div>
  </nav>
</header>
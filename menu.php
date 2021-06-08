<nav class="navbar navbar-expand-md navbar-dark " >
        
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link <?php echo $pg=='inicio'? 'active': ''; ?>" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg=='sobre-mi'? 'active': ''; ?> " href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link <?php echo $pg=='proyectos'? 'active': ''; ?>" href="proyectos.php" tabindex="-1" aria-disabled="true">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg=='contacto'? 'active': ''; ?>" href="contacto.php" tabindex="-1" aria-disabled="true">Contacto</a>
                        </li>

                    </ul>
                </div>
</nav>
<nav class="menu-movil" role="navigation">
<div id="menuToggle">
    
    <input type="checkbox" />
    
   
    <span></span>
    <span></span>
    <span></span>
    
    
    <ul id="menu">
<a> <li class="nav-item ">
                            <a class="nav-link <?php echo $pg=='inicio'? 'active': ''; ?>" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                        </li></a>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg=='sobre-mi'? 'active': ''; ?> " href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link <?php echo $pg=='proyectos'? 'active': ''; ?>" href="proyectos.php" tabindex="-1" aria-disabled="true">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg=='contacto'? 'active': ''; ?>" href="contacto.php" tabindex="-1" aria-disabled="true">Contacto</a>
                        </li>

 </ul>
  </div>


            </nav>
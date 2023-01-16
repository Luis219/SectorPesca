<div class="baseNavegacion">
    <!-- Navegación -->
    <div class="navbar">
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/sectorpesquero/vistas/barco/barcoVista.php">BARCOS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/sectorpesquero/vistas/tripulante/trupulanteInicio.php">TRIPULACIÓN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sectorpesquero/vistas/pesca/pescaInicio.php">PESCA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/sectorpesquero/vistas/cerrarsesion.php">Cerrar Sesión</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php
                    echo  'Bienvenido ' .  $_SESSION['usuario'];
                    ?>
                </li>
                <li class="nav-item">
                    <img src="../../assets/img/logo.png" alt="logo" style="min-height: 20px; max-height: 30px">
                </li>
            </ul>
        </nav>
        <!-- Fin de navegación -->
    </div>
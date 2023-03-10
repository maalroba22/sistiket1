<?php @session_start() ?>
<header class="site-header">
    <div class="container-fluid">

        <a href="#" class="site-logo">
            <img class="hidden-md-down" src="../public/img/logo-2.png" alt="">
            <img class="hidden-lg-up" src="../public/img/logo-2-mob.png" alt="">
        </a>

        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>

        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../public/img/avatar-2-64.png" alt="">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="../Perfil/"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Ayuda</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="salir.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesion</a>
                        </div>
                    </div>
                </div>

                <div class="mobile-menu-right-overlay"></div>

                <input type="hidden" id="user_idx" value="<?php ?>"><!-- ID del Usuario-->
                <input type="hidden" id="usu_id" value="<?php echo $_SESSION['SISTIKET']['usuario_id'] ?>"><!-- ID del Usuario-->
                <input type="hidden" id="rol_id" value="<?php echo $_SESSION['SISTIKET']['rol_id'] ?>"><!-- Rol del Usuario-->
               

                <div class="dropdown dropdown-typical">
                    <a href="#" class="dropdown-toggle no-arr">
                        <span class="font-icon font-icon-home"></span>
                        <span class="font-icon font-icon-user"></span>
                        <span class="lblcontactonomx"><?php echo $_SESSION['SISTIKET']['nombre_completo']; ?></span>
                        
                       
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>
<?php
if ($_SESSION['SISTIKET']['rol_id'] == 1) {
?>

    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="tables.html">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Inicio</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="nuevoTiket.php">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Nuevo Ticket</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="consultarTiket.php">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Consultar Tiket</span>
                </a>
            </li>
        </ul>
        </section>
    </nav>



<?php
} else {
?>
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="tables.html">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Inicio</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="tables.html">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Ver Tiket</span>
                </a>
            </li>
        </ul>
        </section>
    </nav>


<?php
}

?>
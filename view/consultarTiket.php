<?php include_once('./seguridad.php') ?>
<!DOCTYPE html>
<html>
<?php include_once('src/head.php') ?>

<body class="with-side-menu">
    <!-- cabecera Header -->

    <?php include_once('src/header.php') ?>


    <!--.side-menu-->
    <?php include_once('src/sidebar.php') ?>
    <div class="page-content">
        <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>Lista de Tiket</h3>
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="#">Home</a></li>
                                <li class="active">Ticket</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>

            <!-- contenidos -->
            <div class="box-typical box-typical-padding">


            <table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th style="width: 5%;">Nro.Ticket</th>
							<th style="width: 35%;">Categoria</th>
							<th class="d-none d-sm-table-cell" style="width: 40%;">Titulo</th>
							<th class="d-none d-sm-table-cell" style="width: 20%;">Descripcion</th>
							<th class="d-none d-sm-table-cell" style="width: 5%;">fecha Creacion</th>
							<th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
							<th class="d-none d-sm-table-cell" style="width: 5%;">Acciones</th>
						
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>

            </div>


        </div><!--.container-fluid-->
    </div><!--.page-content-->

    <!-- footer donde inserto los script -->
    <?php include_once('src/footer.php') ?>
    <script src="js/consultarTiket.js"></script>
</body>

</html>
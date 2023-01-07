<?php include_once('./seguridad.php') ?>
<!DOCTYPE html>
<html>
<?php include_once('src/head.php') ?>
<body class="with-side-menu">
<!-- cabecera Header -->

<?php include_once('src/header.php') ?>
	<!--.side-menu-->
	<?php include_once('src/sidebar.php') ?>


	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podra generar nuevos tickets de HelpDesk.
				</p>

				<h5 class="m-t-lg with-border">Ingresar Información</h5>

				<div class="row">
					<form  id="ticket_form">
						<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION['SISTIKET']['usuario_id']?>">

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Categoria</label>
								<select id="categoria_id" name="categoria_id" class="form-control">
									<option value="1">perro</option>
									<option value="2">gato</option>
								</select>
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Titulo</label>
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
								<div class="summernote-theme-1">
									<textarea id="tick_descrip" name="tick_descrip" class="summernote" name="name"></textarea>
								</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<!-- <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button> -->
                             <button type="submit" class="btn btn-inline btn-primary-outline">Guardar</button>
                        </div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<!-- Contenido -->

	<!-- footer donde inserto los script -->
	<?php include_once('src/footer.php') ?>
    <script src="js/nuevoTiket.js"></script>
</body>
</html>
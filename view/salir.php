<?php
@session_start();
unset($_SESSION['SISTIKET']['usuario_id']);
header("Location:../index.php");
exit();
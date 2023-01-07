<?php
@session_start();
if(!isset($_SESSION['SISTIKET']['usuario_id'])){
    header("Location: ../index.php");
}
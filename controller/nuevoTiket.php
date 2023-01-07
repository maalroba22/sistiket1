<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        include_once('../models/nuevoTiket.php');
        switch ($_POST['opcn']) {
            case 'getAll_categorias':
                $res = Ticket::getAll_categorias();
                echo json_encode($res);
                break;
            case 'addTiket':
                $res =Ticket::addTiket($_POST);
                echo json_encode($res);
                break;
        }
        break;
}

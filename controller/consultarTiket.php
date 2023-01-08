<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        include_once('../models/consultarTiket.php');
            switch ($_POST['opcn']) {
                case 'getAllTiket':
                    $res = ConsultarTiket::get_AllTiket($_POST);
                    $data = [];
                    foreach ($res as $row) {
                        $campos =[];
                        $campos[]= $row['ticket_id'];
                        $campos[]= $row['categoria'];
                        $campos[]= $row['titulo'];
                        $campos[]= $row['descripcion'];
                        $campos[]= $row['nombre'];
                        $data[]=$campos;
                    }
                    $results = array(
                        "sEcho"=>1,
                        "iTotalRecords"=>count($data),
                        "iTotalDisplayRecords"=>count($data),
                        "aaData"=>$data);
                    echo json_encode($results);
                    break;
            }

        break;
    
   
}
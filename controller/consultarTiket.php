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
                        $campos[]= date("d/m/y H:i:s", strtotime($row['fecha_creacion']));
                        $row['estadot']==1 ? $campos[]='<span class="label label-pill label-success">Abierto</span>': $campos[]='<span class="label label-pill label-danger">Cerrado</span>' ;
                        $campos[]='<button type="button" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';       
                       
                        $data[]=$campos;
                    }
                    $results = [
                        "sEcho"=>1,
                        "iTotalRecords"=>count($data),
                        "iTotalDisplayRecords"=>count($data),
                        "aaData"=>$data
                    ];
                    echo json_encode($results);
                        
                    break;
            }

        break;
}
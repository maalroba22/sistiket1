<?php

class Ticket
{

    public static function getAll_categorias()
    {

        include_once('../config/init_db.php');
        $getCategorias = DB::query("SELECT
                                categori_id,
                                nombre,
                                estado
                            FROM
                                categoria");
        return $getCategorias;
    }

/* funcion para insertar ticket */

public static function addTiket($data){
    include_once('../config/init_db.php');

    $tablaTiket ='ticket';
    $datos = [ 
                'usu_id'=> $data['usu_id'],
                'cat_id'=> $data['categoria_id'],
                'titulo'=> $data['tick_titulo'],
                'descripcion'=> $data['tick_descrip']
            ];

    $insert = DB::insert($tablaTiket,$datos);
    return $insert;
}
}

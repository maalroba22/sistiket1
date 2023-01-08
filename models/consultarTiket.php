<?php 

class ConsultarTiket{


    public static function get_AllTiket($usuarioId){
        include_once('../config/init_db.php');

        $getAllTiket = DB::query(" SELECT
                                t.*,
                                    c.nombre as categoria,
                                    c.estado,
                                    u.nombre
                            FROM
                                ticket t
                                INNER JOIN categoria c on c.categori_id = t.cat_id
                                INNER JOIN usuario u  on u.usuario_id = t.usu_id
                                where t.estado =1 and u.usuario_id = 1;");
                                return $getAllTiket;
    }
}
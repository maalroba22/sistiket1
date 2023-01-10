<?php 

class ConsultarTiket{


    public static function get_AllTiket($usuarioId){
        
        include_once('../config/init_db.php');

        $getAllTiket = DB::query(" SELECT
                                t.*,
                                    c.nombre as categoria,
                                    c.estado,
                                    u.nombre,
                                    t.estado as estadot
                            FROM
                                ticket t
                                INNER JOIN categoria c on c.categori_id = t.cat_id
                                INNER JOIN usuario u  on u.usuario_id = t.usu_id
                                where   u.usuario_id = {$usuarioId['id_usurio']}");
                                return $getAllTiket;
    }
}
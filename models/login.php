<?php
 
class SingUp
{


    public static function login($data)
    {
      
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8_decode'; // defino formato de caracteres
        $email = $data['email'];
        $password = $data['password'];
        $validate = [];

        if (empty($email)) {
            $validate["error"] = true;
            $validate["msg"] = "Email es Requeridas";
            return $validate;
        }
        if (empty($password)) {
            $validate["error"] = true;
            $validate["msg"] = "Pasword es Requeridas";
            return $validate;
        }
      
        $usuario = DB::queryFirstRow("SELECT usuario_id,
                                        CONCAT(nombre, ' ', apellidos) AS nombre,
                                        email,
                                        rol_id,
                                        PASSWORD
                                    FROM
                                        usuario
                                    WHERE
                                         email = '$email' AND password = '$password' ");

        if (empty($usuario)) {
            $validate['error']= true;
            $validate['msg']='Error  de usuario o contraseña';
            return $validate;
        }else{
                unset($usuario['password']);// destruye la contraseña
                $usuario['nombre_completo']=$usuario['nombre'];
                @session_start();
                $_SESSION['SISTIKET'] = $usuario;

                
            $validate['error']= false;
            $validate['msg']='Acceso al sistema';
            return $validate;
        }
    }
}
